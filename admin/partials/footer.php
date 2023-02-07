<footer class="footer">
  <div class="container-fluid d-flex justify-content-between">
    <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Dwi Putra Bayu</span>
    <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Follow <a
        href="https://github.com/dpbayu" target="_blank">Github</a> Dwi Putra Bayu</span>
  </div>
</footer>

<!-- JS Start  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/todolist.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#example').DataTable({
        paging: true,
        ordering: true,
        info: true,
    });
});
</script>
<script type="text/javascript">
          $(document).ready(function () {
            // updating the view with notifications using ajax
            function load_notification(view = '') {
              $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                  view: view
                },
                dataType: "json",
                success: function (data) {
                  $('.dropdown-menu').html(data.notification);
                  if (data.unseen_notification > 0) {
                    $('.count').html(data.unseen_notification);
                  }
                }
              });
            }

            load_notification();
            // submit form and get new records
            $('#comment_form').on('submit', function (event) {
              event.preventDefault();
              if ($('#subject').val() != '' && $('#comment').val() != '') {
                var form_data = $(this).serialize();
                $.ajax({
                  url: "insert.php",
                  method: "POST",
                  data: form_data,
                  success: function (data) {
                    $('#comment_form')[0].reset();
                    load_notification();
                  }
                });
              } else {
                alert("Subject & Comments Harus Diisi");
              }
            });
            // load new notifications
            $(document).on('click', '.dropdown-toggle', function () {
              $('.count').html('');
              load_notification('yes');
            });
            setInterval(function () {
              load_notification();
            }, 5000);
          });
        </script>
<!-- JS End -->