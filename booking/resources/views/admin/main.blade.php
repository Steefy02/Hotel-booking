@extends('admin.template')

@section('title', "Admin")

@section('styles')
<style>
.completed {
  display: none!important;
}
</style>
@endsection

@section('content')

<div class="row">
    <div class="col-md-5 grid-margin stretch-card">
                    <div class="card" id="todo">
                        <div class="card-body">
                            <h4 class="card-title">Taskuri Administrator</h4>
                            <div class="add-items">
                              <input type="text" class="form-control todo-list-input"  placeholder="Adauga nou task">
                              <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent" id="add_todo"><i class="icon-circle-plus"></i></button>
                          </div>
                            <div class="list-wrapper pt-2">
                                <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Verifica disponibilitatea camerelor
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Adauga noi oferte
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Intalnire cu staff ul
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                refacut fotografii in camere
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-flat">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox">
                                                Luat licenta
                                            </label>
                                        </div>
                                        <i class="remove ti-close"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
    </div>
  </div>
  
</div>

@endsection

@section('scripts')
<script>

window.onload = function() {
if(!document.getElementById('dashboard').classList.contains('active')) {
    document.getElementById('dashboard').classList.add('active');
}

if(document.getElementById('users').classList.contains('active')) {
    document.getElementById('users').classList.remove('active');
}

if(document.getElementById('rooms').classList.contains('active')) {
    document.getElementById('rooms').classList.remove('active');
}

if(document.getElementById('bookings').classList.contains('active')) {
    document.getElementById('bookings').classList.remove('active');
}

if(document.getElementById('packages').classList.contains('active')) {
    document.getElementById('packages').classList.remove('active');
}

if(document.getElementById('special').classList.contains('active')) {
    document.getElementById('special').classList.remove('active');
}
}

$(".checkbox").each(function () {
  $(this).change(function () {
    //var id = $(this).attr('id');
    $(this).parent().parent().parent().remove();
  });
});

// $("#add_todo").on('click', function() {
//   alert(1);
//   $(".checkbox").each(function () {
//   $(this).change(function () {
//     //var id = $(this).attr('id');
//     $(this).parent().parent().parent().remove();
//   });
// });
// });

$("#todo").on('click', function () {
  $(".checkbox").each(function () {
    if($(this).is(":checked")) {
      $(this).parent().parent().parent().remove();
    }
});
});

</script>
@endsection