#!/bin/bash -x

# write to file
write_to_file()
{

 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/index.php" > "../index.html"
 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/portraits/index.php" > "../portraits/index.html"
 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/portraits/pixel-artists/arjan-westerdiep.php" > "../portraits/pixel-artists/arjan-westerdiep.html"
 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/portraits/pixel-artists/denise-wilton.php" > "../portraits/pixel-artists/denise-wilton.html"
 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/portraits/pixel-artists/gary-j-lucken.php" > "../portraits/pixel-artists/gary-j-lucken.html"
 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/portraits/pixel-artists/jenn-schiffer.php" > "../portraits/pixel-artists/jenn-schiffer.html"
 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/portraits/pixel-artists/kai-vermehr.php" > "../portraits/pixel-artists/kai-vermehr.html"
 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/portraits/pixel-artists/paul-robertson.php" > "../portraits/pixel-artists/paul-robertson.html"
 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/portraits/pixel-artists/shaun-inman.php" > "../portraits/pixel-artists/shaun-inman.html"
 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/portraits/pixel-artists/steffen-sauerteig.php" > "../portraits/pixel-artists/steffen-sauerteig.html"
 curl "http://localhost/~bram/github.com/atelierbram/svg-pixel-art/php/portraits/pixel-artists/svend-smital.php" > "../portraits/pixel-artists/svend-smital.html"
 }

# execute it
write_to_file

