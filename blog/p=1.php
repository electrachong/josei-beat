<!DOCTYPE html>
<html>
    
    <head>
        <title>
            josei beat! 
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://www.holbertonschool.com/level2/holberton.css" rel="stylesheet">
        <link href="/styles.css" rel="stylesheet">
        <script src="behavior.js"></script>
    </head>
    
       <body class="works_on_smartphone">
        
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
        </script>
        
        <header> 
            
            <div class="right">
                
                <a href="https://twitter.com/share" class="twitter-share-button" data-via="josei_beat">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                </script>
                
                <div class="fb-share-button" data-href="http://173.246.107.90/blog/p=1" data-layout="button_count"></div>
                
            </div>
            
            <h1><a href="/index.php"><img src="/bito-san.jpg" width="102" height="114" alt="smirking Bito mascot" /> josei beat</a></h1>
            
            <ul>
                <li><a href="/index.php">home</a></li>
                <li><a href="/about.html">about</a></li>
                <li><a href="/reviews.html">reviews</a></li>
                <li><a href="/forum.html">forum</a></li>
                <li><a href="/contact.html">contact</a></li>
            </ul>
            
        </header>
        
        <main>
            
            <article>
            <?php 
                /* Short and sweet */
                define('WP_USE_THEMES', false);
                require('./wp-blog-header.php');
            ?>

            
            <?php
                $post_id = 1;
                $queried_post = get_post($post_id);
                $author_id = $queried_post->post_author;
                $author_name = get_user_by(id, $author_id); 
                $content = $queried_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
            ?>
            
                <h2 id="post-<?php the_ID(); ?>">
                <a href="./p=1">
                <?php echo $queried_post->post_title; ?></a></h2>
                <p><small><?php the_time('F jS, Y') ?> by <strong><?php echo $author_name->display_name ?></strong> </small></p>

                <div class="entry">
                <?php echo $content; ?>
                </div>

                <p class="postmetadata">
                Posted in <?php the_category(', ') ?> 
                <strong>|</strong>
                <?php edit_post_link('Edit','',''); ?>  
                </p>

                <?php end?>
                
            </article>
            
            <aside>
               
                <div id="disqus_thread"></div>
                <script>
                    var disqus_config = function () {
                    /*this.page.url = http://173.246.107.90/blog/p=1;*/
                    this.page.identifier = '/blog/p=1'; 
                };

                    (function() {
                        var d = document, s = d.createElement('script');
        
                        s.src = '//joseibeat.disqus.com/embed.js'; 
        
                        s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a>
                </noscript>
                
            </aside>
            
        </main>
        
        <footer>
        Made by <a href="https://twitter.com/electra_chong" target="_blank">Electra Chong</a> for <a href="https://www.holbertonschool.com" target="_blank">Holberton School</a>
        </footer>  
    
    </body>
    
</html>