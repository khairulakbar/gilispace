 <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2020 | Powered by Endogasin</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/dashboard/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/dashboard/js/demo/datatables-demo.js"></script>


  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>assets/dashboard/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>assets/dashboard/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/js/demo/chart-pie-demo.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/id.js"></script>

  <!-- Summernote Text Editor JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#summernote').summernote({
    height: "100px",
    toolbar: [    
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['fontsize', ['fontsize']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        //['para', ['ul', 'ol', 'paragraph']],       
        //['insert',['picture']]
      ],
		styleWithSpan: false
	});
  });
  </script>
  <!--function browse file-->
  <script>
        $(function() {

        // We can attach the `fileselect` event to all file inputs on the page
        $(document).on('change', ':file', function() {
          var input = $(this),
              numFiles = input.get(0).files ? input.get(0).files.length : 1,
              label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
          input.trigger('fileselect', [numFiles, label]);
        });

        // We can watch for our custom `fileselect` event like this
        $(document).ready( function() {
            $(':file').on('fileselect', function(event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = numFiles > 1 ? numFiles + ' files selected' : label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
        });

        });


        $(function(){
        $('#pesan-flash').delay(4000).fadeOut();
        $('#pesan-error-flash').delay(5000).fadeOut();
        });

        

  </script>

<script>

$(function () { 

/*
$("#date").datetimepicker({
     locale : 'id',
     format : "YYYY-MM-DD H:m:s",
     icons: {
         up: "fa fa-chevron-circle-up",
         down: "fa fa-chevron-circle-down",
         next: 'fa fa-chevron-circle-right',
         previous: 'fa fa-chevron-circle-left'
     }
 });      
 */

});

        (function($) {
            $.fn.checkFileType = function(options) {
                var defaults = {
                    allowedExtensions: [],
                    success: function() {},
                    error: function() {}
                };
                options = $.extend(defaults, options);

                return this.each(function() {

                    $(this).on('change', function() {
                        var value = $(this).val(),
                            file = value.toLowerCase(),
                            extension = file.substring(file.lastIndexOf('.') + 1);

                        if ($.inArray(extension, options.allowedExtensions) == -1) {
                            options.error();
                            $(this).focus();
                        } else {
                            options.success();

                        }

                    });

                });
            };

        })(jQuery);

        $(function() {
            $('#img').checkFileType({
                allowedExtensions: ['jpg', 'jpeg'],
                success: function() {
                    //alert('Success');
                },
                error: function() {
                    alert('Upload File Type Jpg/Jpeg Only');
                }
            });

        });

        $(function() {
            $('#vid').checkFileType({
                allowedExtensions: ['mp4'],
                success: function() {
                    //alert('Success');
                },
                error: function() {
                    alert('Upload File Type .mp4 Only');
                }
            });

        });
						/*function filePreview(input) {
							if (input.files && input.files[0]) {
								var reader = new FileReader();
								reader.onload = function (e) {
									//$('#uploadForm + img').remove();
									//$('#uploadForm').after('<img src="'+e.target.result+'" width="450" height="300"/>');
									$('#uploadForm + embed').remove();
									$('#uploadForm').after('<br><embed src="'+e.target.result+'" width="450" height="300"/>');
								}
								reader.readAsDataURL(input.files[0]);
							}
						}

						$("#file").change(function () {
							filePreview(this);
						});*/
						$("#fileUpload").on('change', function () {
 
							if (typeof (FileReader) != "undefined") {
					 
								var image_holder = $("#previu_image");
								image_holder.empty();
					 
								var reader = new FileReader();
								reader.onload = function (e) {
									$("<img />", {
										"src": e.target.result,
										"class": "thumb-image"
									}).appendTo(image_holder);
					 
								}
								image_holder.show();
								reader.readAsDataURL($(this)[0].files[0]);
							} else {
								alert("This browser does not support FileReader.");
							}
						});
            </script> 
            
            <script type="text/javascript">
            function copyteks() {
              var copyText = document.getElementById("urlinput");
              copyText.select();
              document.execCommand("copy");
              
              var tooltip = document.getElementById("myTooltip");
              tooltip.innerHTML = "Copied: " + copyText.value;
            }

            function outFunc() {
              var tooltip = document.getElementById("myTooltip");
              tooltip.innerHTML = "Copy to clipboard";
            }
            </script>
            
		<!-- preview image -->

</body>

</html>