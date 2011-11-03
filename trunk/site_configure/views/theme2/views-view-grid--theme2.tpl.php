<?php
// $Id: views-view-grid.tpl.php,v 1.3.4.1 2010/03/12 01:05:46 merlinofchaos Exp $
/**
 * @file views-view-grid.tpl.php
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<div class="views-view-mytheme">
	<?php $count = 0 ?>
    <?php foreach ($rows as $row_number => $columns): ?>			
        <?php foreach ($columns as $column_number => $item): ?>	
			<?php 
				$htmlTagBegin = '<li>';
				$htmlTagEnd = '</li>'; ?>
			<?php 
				if($count == 0) {
					$htmlTagBegin = '<h4>';
					$htmlTagEnd = '</h4><ul>';
				}
				else if($count == 4){
					$htmlTagEnd = '</li></ul>';
				}
			?>			
			<?php if($count < 5) { ?>
				<?php print $htmlTagBegin; ?>
				<?php print $item; ?>
				<?php print $htmlTagEnd; ?>				
			<?php } ?>							
			<?php $count++ ?>

        <?php endforeach; ?>
    <?php endforeach; ?>
</div>
