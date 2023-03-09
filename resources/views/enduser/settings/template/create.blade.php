<div class="modal-header bg-info">
    <h5 class="modal-title">Add Category</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<form id="saveUserForm">
    <div class="modal-body  text-dark">
        @csrf
        @method('POST')
        <!-- Form content start -->
        <div class=" row form-group">
            <label for="group" class="col-lg-3 col-form-label">Sms Receiver</label>
            <div class="col-lg-9">
                <select name="receiver" class="form-control kt-select2-2">
                <option value="Client">Client</option>
                    <option value="Trip">Trip</option>
                    <option value="Vehicle">Vehicle</option>
                    <option value="Driver">Driver</option>
                    <option value="Supplier">Supplier</option>
                    <option value="User">User</option>
                </select>
                <small id="parent_id-error" class="text-danger" for="parent_id"></small>
            </div>
        </div>

        <div class=" row form-group">
            <label for="name" class="col-lg-3 col-form-label">Category Name </label>
            <div class="col-lg-9">
            <select name="category" class="form-control kt-select2-2">
                   @foreach($data as $item)
                    <option value="{{$item->category_name}}">{{$item->category_name}}</option>
                    @endforeach
                </select>
                <small id="name-error" class="text-danger" for="name"></small>
            </div>
        </div>

        <div class=" row form-group">
            <label for="name" class="col-lg-3 col-form-label">Type </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="types">
                <small id="name-error" class="text-danger" for="name"></small>
            </div>
        </div>

        <div class=" row form-group">
            <label for="name" class="col-lg-3 col-form-label">Title </label>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="title">
                <small id="name-error" class="text-danger" for="name"></small>
            </div>
        </div>

        <div class=" row form-group">
            <label for="name" class="col-lg-3 col-form-label">Template </label>
            <div class="col-lg-9">
                <textarea rows="5" cols="5" class="form-control" name="template"></textarea>
                <small id="name-error" class="text-danger" for="name"></small>
            </div>
        </div>
        <!-- Form content end -->
    </div>
    <div class="form-button">
        <button type="button" id="cancle" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>

        <input type="submit" id="submit" class="btn btn-success btn-sm float-right" value="Save">
    </div>

</form>

<script>
    $(document).ready(function(e) {

        $('#image').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('.kt-avatar__holder').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });


    $(document).on('submit', 'form#saveUserForm', function(event) {

        event.preventDefault();
        $("[id$=-error]").text('');

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ route('template-store') }}",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                successMsg('Template created successfully.');
                $('#user_table').DataTable().ajax.reload();
                $('#userModal').modal('hide');
            },
            error: function(reject) {
                errorMsg();
                if (reject.status === 422 || reject.status === 403) {
                    var errors = $.parseJSON(reject.responseText);
                    $.each(errors.error.message, function(key, val) {
                        console.log(key + ' : ' + val);
                        $("small#" + key + "-error").text(val[0]);
                    });
                }
            }
        });
    });

    $(document).ready(function() {
        $('.kt-select2-2').select2({
            placeholder: "Select"
        });

        $('#pass-tggl').click(function() {
            $('#icon').toggleClass('fa-eye-slash');
            var pass = $('#password');
            if (pass.attr('type') === 'password') {
                pass.attr('type', 'text');
            } else {
                pass.attr('type', 'password');
            }
        });

        $('#conf-pass-tggl').click(function() {
            $('#icon-conf').toggleClass('fa-eye-slash');
            var passConf = $('#password_confirmation');
            if (passConf.attr('type') === 'password') {
                passConf.attr('type', 'text');
            } else {
                passConf.attr('type', 'password');
            }
        });
    });
</script>
