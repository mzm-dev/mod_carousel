<?php
/**
 * @version     1.1
 * @package     mod_carousel
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Brad Traversy <support@joomdigi.com> - http://www.joomdigi.com
 */
//No Direct Access
defined('_JEXEC') or die;
?>
<style>

</style>
<div class="panel">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            foreach ($slideritems as $key => $item) {
                $active_data = ($key == 1) ? " active" : "";
                if (!empty($item['main_image'])):
                    echo '<li data-target="#myCarousel" data-slide-to="' . $key . '"class="' . $active_data . '"></li>';
                endif;
            }
            ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php //print_r($data_slide); ?>
            <?php
            foreach ($slideritems as $key => $item) {
                $active = ($key == 1) ? " active" : "";
                if (!empty($item['main_image'])):
                    ?>
                    <div class="item<?php echo $active; ?>">
                        <?php if ($item['main_image']) : ?>                       
                            <img src="<?php echo JURI::base(); ?><?php echo $item['main_image']; ?>" alt="<?php echo $item['heading']; ?>" />
                        <?php endif; ?>
                        <div class="carousel-caption">
                            <h1 class="carousel-title"><?php echo $item['heading']; ?></h1>
                            <?php if ($item['text'] != "no") : ?>
                                <p class="carousel-body"><?php echo $item['text']; ?></p>
                            <?php endif; ?>
                            <?php if ($item['show_read_more']) : ?>
                                <p><a class="btn btn-sm btn-primary" href="<?php echo $item['button_link']; ?>" role="button"><?php echo $item['button_text']; ?></a></p>
                            <?php endif; ?>
                        </div>
                    </div>        
                    <?php
                endif;
            }
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
</div>