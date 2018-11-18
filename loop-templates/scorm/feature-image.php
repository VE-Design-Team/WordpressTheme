</div><!-- close container -->
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div class="container-fluid">
    <div id="feature-image">

        <?php if( get_field('field_5bedb6d5e8e74') == 'left' ){ ?>
        <div id="fi-left">

            <div class="background" style="padding-top: <?php echo get_field('field_5bedf8e67644b');?>%;background-image: url('<?php echo $image[0]; ?>')">
            </div>
            <div class="centre-space container" style="margin-top: -<?php 
                    $p = floatval(get_field('field_5bedf8e67644b'));
                    echo ($p/3) ;?>%">
                <div class="white-heading ">
                    <tr>
                        <td>
                            <h1>
                                <?php the_title();?>
                            </h1>
                        </td>
                    </tr>
                </div>

            </div>
        </div>
        <?php } elseif( get_field('field_5bedb6d5e8e74') == 'right' ){ ?>
        <div id="fi-right">

            <div class="background" style="padding-top: <?php echo get_field('field_5bedf8e67644b');?>%;background-image: url('<?php echo $image[0]; ?>')">
            </div>
            <div class="centre-space container" style="margin-top: -<?php 
                    $p = floatval(get_field('field_5bedf8e67644b'));
                    echo ($p/3) ;?>%">
                <div class="white-heading ">
                    <tr>
                        <td>
                            <h1>
                                <?php the_title();?>
                            </h1>
                        </td>
                    </tr>
                </div>

            </div>
        </div>
        <?php }elseif( get_field('field_5bedb6d5e8e74') == 'center' ){ ?>
        <div id="fi-center">

            <div class="background" style="padding-top: <?php echo get_field('field_5bedf8e67644b');?>%;background-image: url('<?php echo $image[0]; ?>')">
            </div>
            <div class="centre-space" style="margin-top: -<?php 
                        $p = floatval(get_field('field_5bedf8e67644b'));
                        echo ($p/4) ;?>%">
                <div class="white-heading">
                    <tr>
                        <td>
                            <h1>
                                <?php the_title();?>
                            </h1>
                        </td>
                    </tr>
                </div>

            </div>
        </div>
        <?php }else{ ?>


        <div id="fi-banner">
            <div class="background" style="padding-top: <?php echo get_field('field_5bedf8e67644b');?>%;background-image: url('<?php echo $image[0]; ?>')">
            </div>
            <div class="white-heading" style="margin-top: -<?php 
                $p = floatval(get_field("
                field_5bedf8e67644b")); echo ($p/2) ;?>%" >
                <tr>
                    <td>
                        <h1>
                            <?php the_title();?>
                        </h1>
                    </td>
                </tr>
            </div>

        </div>
        <?php }; ?>

    </div>
</div>
<div class="container whitebg">