module.exports = function(grunt) {

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    // sass: {
    //   dist: {
    //     options: {
          // cssmin will minify later
    //       style: 'expanded'
    //     },
    //     files: {
    //       'assets/css/build/global-v1.css': 'assets/sass/global-v1.scss'
    //     }
    //   }
    // },
    //
    compass: {
      dist: {
        options: {
          config: 'config/config.rb'
        }
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 version']
      },
      multiple_files: {
        expand: true,
        flatten: true,
        src: 'assets/css/build/*.css',
        dest: 'assets/css/build/prefixed/'
      }
    },

    cssmin: {
      combine: {
        files: {
          'assets/css/build/minified/global-v1.css': ['assets/css/build/prefixed/global-v1.css']
        }
      }
    },

    jshint: {
      beforeconcat: ['assets/js/*.js']
    },

    concat: {
      dist: {
        src: [
          'assets/js/libs/*.js',
          'assets/js/convert-to-svg.js'
        ],
        dest: 'assets/js/build/production.js'
      }
    },

    uglify: {
      build: {
        src: 'assets/js/build/production.js',
        dest: 'assets/js/build/production.min.js'
      }
    },

    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'assets/img/',
          src: ['**/*.{png}'],
          dest: 'assets/img/'
        }]
      }
    },

    watch: {
      options: {
        livereload: true,
      },
      scripts: {
        files: ['assets/js/*.js'],
        tasks: ['concat', 'uglify', 'jshint'],
        options: {
          spawn: false,
        }
      },
      css: {
        files: ['assets/css/*.scss'],
        tasks: ['assets/sass', 'autoprefixer', 'cssmin'],
        options: {
          spawn: false,
        }
      },
      images: {
        files: ['assets/img/**/*.{png}', 'assets/img/*.{png}'],
        tasks: ['imagemin'],
        options: {
          spawn: false,
        }
      }
    },

    connect: {
      server: {
        options: {
          port: 8000,
          base: '.'
        }
      }
    },

  });

  require('load-grunt-tasks')(grunt);

  grunt.loadNpmTasks('grunt-contrib-compass');
  // Default Task is basically a rebuild
  grunt.registerTask('default', ['concat', 'uglify', 'sass', 'imagemin']);

  grunt.registerTask('dev', ['connect', 'watch']);

};

