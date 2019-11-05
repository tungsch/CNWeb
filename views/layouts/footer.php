			<hr />
			<footer>Bản quyền &copy; 2019 bởi DH17PM, DH17TH.</footer>
		</div>
		
		<script src="public/js/jquery-3.3.1.slim.min.js"></script>
		<script src="public/js/popper.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/ckfinder/ckfinder.js"></script>
		<script type="text/javascript">
			function BrowseServer()
			{
				var finder = new CKFinder();
				finder.basePath = '../';
				finder.selectActionFunction = function(fileUrl) {
					document.getElementById('HinhAnh').value = fileUrl.substring(fileUrl.lastIndexOf('/') + 1);
				};
				finder.popup();
			}
		</script>
	</body>
</html>