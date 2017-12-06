<?php
/**
 * @author           Pierre-Henry Soria <phy@hizup.uk>
 * @copyright        (c) 2015, Pierre-Henry Soria. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 * @link             http://hizup.uk
 */


/**
 * Since PHP 5.4, the echo short tag "<?= ?> is always available, so I use it to simplify the visibility of the template
*/
?>
<?php require 'inc/header.php' ?>

<?php if (empty($this->posts)): ?>
    <p class="bold">There is no Blog Post.</p>
    <p><button type="button" onclick="window.location='<?=ROOT_URL?>?do=Post.add'" class="bold">Add Your First Blog Post!</button></p>
<?php else: ?>

    <?php foreach ($this->posts as $post): ?>
        <h1><a href="<?=ROOT_URL?>?do=Post.get&amp;id=<?=$post->id?>"><?=htmlspecialchars($post->title)?></a></h1>

        <p><?=nl2br(htmlspecialchars(mb_strimwidth($post->body, 0, 100, '...')))?></p>
        <p><a href="<?=ROOT_URL?>?do=Post.get&amp;id=<?=$post->id?>">Want to see more?</a></p>
        <p class="left small italic">Posted on <?=$post->createdDate?></p>

        <?php require 'inc/control_buttons.php' ?>
        <hr class="clear" /><br />
    <?php endforeach ?>

<?php endif ?>

<?php require 'inc/footer.php' ?>
