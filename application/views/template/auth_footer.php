<div class="text-center">
    <!-- <small>copyright &copy; 2024 Dede Herman | All right reserved.</small> -->
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- datepicker -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#provinceSelect').change(function() {
            var provinceId = $(this).val();
            $('#citySelect').prop('disabled', true).html('<option selected>Pilih Kota</option>');

            if (provinceId) {
                $.ajax({
                    url: '<?= base_url(); ?>getCities', // Replace with your API endpoint to get cities based on provinceId
                    type: 'GET',
                    data: {
                        province_id: provinceId
                    },
                    success: function(data) {
                        var cities = data.cities; // Assuming the response is an array of city objects
                        $('#citySelect').prop('disabled', false);
                        cities.forEach(function(city) {
                            $('#citySelect').append('<option value="' + city.id + '">' + city.name + '</option>');
                        });
                    },
                    error: function() {
                        alert('Error fetching cities');
                    }
                });
            }
        });
    });
</script>
</body>

</html>