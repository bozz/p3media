<?php
$this->breadcrumbs[] = 'Upload';
?>

<h1>Media</h1>
<p>
    <?php
    $this->widget('TbBreadcrumbs',
                  array(
                       'links' => $this->breadcrumbs
                  ));
    ?>
</p>

<h2>Upload</h2>
<p>
<ul>
    <li>
        Add files by drag & drop or by clicking the select button below
    </li>
    <li>
        Click 'Start upload'
    </li>
    <li>
        When upload has been completed, manage your files with
        the <?php echo CHtml::link('File Browser', array('default/browser')) ?>
    </li>
</ul>
</p>
<?php
$this->widget('jquery-file-upload-widget.EFileUpload');
?>
