<script src="<?=base_url()?>assets/ckfinder/ckfinder.js"></script>
<div id="ckfinder1">
</div>
<script>
   CKFinder.widget( 'ckfinder1', {
	displayFoldersPanel: false,
	height: 500,
	id: 'gallery',
	readOnly: true,
	readOnlyExclude: 'Toolbars',
	thumbnailDefaultSize: 143,
	width: '100%'
} );
</script>