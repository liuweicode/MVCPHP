<?php
/**
 * @author           Pierre-Henry Soria <phy@hizup.uk>
 * @copyright        (c) 2015, Pierre-Henry Soria. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 * @link             http://hizup.uk
 */
?>
<?php if(!empty($_SESSION['is_logged'])): ?>

    <button type="button" onclick="window.location='<?=ROOT_URL?>?do=post.edit&amp;id=<?=$post->id?>'" class="bold">Edit</button> |
    <form action="<?=ROOT_URL?>?do=post.delete&amp;id=<?=$post->id?>" method="post" class="inline"><button type="submit" name="delete" value="1" class="bold">Delete</button></form> |
    <button type="button" onclick="window.location='<?=ROOT_URL?>?do=post.add'" class="bold">Add New Post</button>

<?php endif ?>
