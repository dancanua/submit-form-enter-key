<!DOCTYPE html>
<html>
<head>
	<title>Submit form using only Enter key with validation</title>
	<style type="text/css">
		textarea {
		    padding: 6px;
		    line-height: 1.618;
		    font: 12px Verdana;
		    display: block;
		}
	</style>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

	<form id="testForm">
	  <textarea placeholder="Try Shift + Enter"></textarea>
	</form>
	<input type="checkbox" style="width:20px;" value="1" name="checkbox" class="checkbox_check"> Press enter to submit


	<script type="text/javascript">
    $('textarea').on('keydown', function(event) {
    if ($('input.checkbox_check').prop('checked')) {
        if (event.keyCode == 13) {
            if (!event.shiftKey) {
                $('#testForm').submit();
            }
        }
    } else {
      // do nothing brah
    }
    });

    $('#testForm').on('submit', function() {
        document.write("Test Form submitted!");
    });
  </script>
</body>
</html>