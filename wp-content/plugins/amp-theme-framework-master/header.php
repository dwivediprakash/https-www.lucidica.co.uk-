<?php amp_header_core(); ?>
 <header class="header container flex">
        <div class="left">
            <?php amp_logo(); ?>
        </div>
        
        <div class="right">
            <?php amp_call_now(); ?>
            <?php amp_social([
                'twitter' => 'http://www.twitter.com/lucidica',
                'facebook' => 'https://www.facebook.com/Lucidica',
                'linkedin' => 'http://www.linkedin.com/in/lucidica-ltd',
	            'instagram' => 'http://www.instagram.com/lucidica'
            ]);?>
            <?php amp_sidebar(['action'=>'open-button']); ?>         
        </div>

</header>


<?php amp_sidebar(['action'=>'start',
    'id'=>'sidebar',
    'layout'=>'nodisplay',
    'side'=>'right'
] ); ?>
<?php amp_sidebar(['action'=>'close-button']); ?>
<?php amp_menu(); ?>
<?php amp_search();?>
<?php amp_sidebar(['action'=>'end']); ?>

<div class="content-wrapper container">