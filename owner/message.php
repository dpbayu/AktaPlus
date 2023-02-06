<!-- PHP Start -->
<?php
require "../include/db.php";
require "function.php";
?>
<!-- PHP End -->

<!DOCTYPE html>
<html lang="en">

<!-- Head Start -->
<?php require "partials/head.php" ?>
<!-- Head End -->

<body>
    <div class="container-scroller">
        <!-- Navbar Start -->
        <?php require "partials/navbar.php" ?>
        <!-- Navbar End -->
        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar Start -->
            <?php require "partials/sidebar.php" ?>
            <!-- Sidebar End -->
            <div class="main-panel">
                <!-- Content Start -->
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-message"></i>
                            </span>Message
                        </h3>
                    </div>
                    <div id="hasil-output"></div>
                    <form method="POST" id="comment_form">
                        <div class="form-group">
                            <label>Enter Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Enter Comment</label>
                            <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
                        </div>
                    </form>
                </div>
                <!-- Content End -->
                <!-- JS Start -->
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
                                        // membuat objek elemen
                                        var hasil = document.getElementById("hasil-output");
                                        // menampilkan output ke elemen hasil
                                        hasil.innerHTML = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Sucess send a message!</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>`;
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
                <!-- Footer Start -->
                <?php require "partials/footer.php" ?>
                <!-- Footer End -->
            </div>
        </div>
    </div>
</body>

</html>