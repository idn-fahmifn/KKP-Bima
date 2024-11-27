<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png" sizes="16x16')}}">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
  <!-- BootStrap css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/bootstrap.min.css')}}">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/apexcharts.css')}}">
  <!-- Data Table css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/dataTables.min.css')}}">
  <!-- Text Editor css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/editor-katex.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/lib/editor.atom-one-dark.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/lib/editor.quill.snow.css')}}">
  <!-- Date picker css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/flatpickr.min.css')}}">
  <!-- Calendar css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/full-calendar.css')}}">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/jquery-jvectormap-2.0.5.css')}}">
  <!-- Popup css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/magnific-popup.css')}}">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/slick.css')}}">
  <!-- prism css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/prism.css')}}">
  <!-- file upload css -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/file-upload.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/lib/audioplayer.css')}}">
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  <!-- data table -->
  <link rel="stylesheet" href="{{asset('assets/css/lib/dataTables.min.css')}}">



  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">



</head>

<body>

  @include('template.menu')

  <main class="dashboard-main">
    <div class="navbar-header">
      <div class="row align-items-center justify-content-between">
        <div class="col-auto">
          <div class="d-flex flex-wrap align-items-center gap-4">
            <button type="button" class="sidebar-toggle">
              <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
              <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl active"></iconify-icon>
            </button>
            <button type="button" class="sidebar-mobile-toggle">
              <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
            </button>
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex flex-wrap align-items-center gap-3">
            <button type="button" data-theme-toggle class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
            <div class="dropdown">
              <button class="d-flex justify-content-center align-items-center rounded-circle" type="button" data-bs-toggle="dropdown">
                <img src="{{asset('assets/images/avatar.png')}}" alt="image" class="w-40-px h-40-px object-fit-cover rounded-circle">
              </button>
              <div class="dropdown-menu to-top dropdown-menu-sm">
                <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                  <div>

                    @if (Auth::check())

                    <h6 class="text-lg text-primary-light fw-semibold mb-2">{{Auth::user()->name}}</h6>
                    <span class="text-secondary-light fw-medium text-sm">Admin</span>
                  </div>

                  @endif
                  <button type="button" class="hover-text-danger">
                    <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon>
                  </button>
                </div>
                <ul class="to-top-list">
                  <li>
                    <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="view-profile.html">
                      <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon> My Profile</a>
                  </li>
                  <li>
                    <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon> Log Out</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </li>
                </ul>
              </div>
            </div><!-- Profile dropdown end -->
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
          <h6 class="fw-semibold mb-0">@yield('page-title')</h6>
          <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
              <a href="{{route('dashboard')}}" class="d-flex align-items-center gap-1 hover-text-primary">
                Dashboard
              </a>
            </li>
            <li>-</li>
            <li class="fw-medium">@yield('page-title')</li>
          </ul>
        </div>
      </div>

      @yield('content')

    </div>


    <footer class="d-footer">
      <div class="row align-items-center justify-content-between">
        <div class="col-auto">
          <p class="mb-0">Bima Wicaksono - <b>21110610031</b> </p>
        </div>
      </div>
    </footer>
  </main>

  <!-- jQuery library js -->
  <script src="{{asset('assets/js/lib/jquery-3.7.1.min.js')}}"></script>
  <!-- Bootstrap js -->
  <script src="{{asset('assets/js/lib/bootstrap.bundle.min.js')}}"></script>
  <!-- Apex Chart js -->
  <script src="{{asset('assets/js/lib/apexcharts.min.js')}}"></script>
  <!-- Data Table js -->
  <script src="{{asset('assets/js/lib/dataTables.min.js')}}"></script>
  <!-- Iconify Font js -->
  <script src="{{asset('assets/js/lib/iconify-icon.min.js')}}"></script>
  <!-- jQuery UI js -->
  <script src="{{asset('assets/js/lib/jquery-ui.min.js')}}"></script>
  <!-- Vector Map js -->
  <script src="{{asset('assets/js/lib/jquery-jvectormap-2.0.5.min.js')}}"></script>
  <script src="{{asset('assets/js/lib/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- Popup js -->
  <script src="{{asset('assets/js/lib/magnifc-popup.min.js')}}"></script>
  <!-- Slick Slider js -->
  <script src="{{asset('assets/js/lib/slick.min.js')}}"></script>
  <!-- prism js -->
  <script src="{{asset('assets/js/lib/prism.js')}}"></script>
  <!-- file upload js -->
  <script src="{{asset('assets/js/lib/file-upload.js')}}"></script>
  <!-- audioplayer -->
  <script src="{{asset('assets/js/lib/audioplayer.js')}}"></script>

  <script src="{{asset('assets/js/lib/dataTables.min.js')}}"></script>




  <!-- main js -->
  <script src="{{asset('assets/js/app.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>


  <script>
    let table = new DataTable('#dataTable');
  </script>

  <script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>

  <script>
    // =============================== Upload Single Image js start here ================================================
  const fileInput = document.getElementById("upload-file");
  const imagePreview = document.getElementById("uploaded-img__preview");
  const uploadedImgContainer = document.querySelector(".uploaded-img");
  const removeButton = document.querySelector(".uploaded-img__remove");

  fileInput.addEventListener("change", (e) => {
    if (e.target.files.length) {
      const src = URL.createObjectURL(e.target.files[0]);
      imagePreview.src = src;
      uploadedImgContainer.classList.remove('d-none');
    }
  });
  removeButton.addEventListener("click", () => {
    imagePreview.src = "";
    uploadedImgContainer.classList.add('d-none');
    fileInput.value = ""; 
  });
  // =============================== Upload Single Image js End here ================================================

  // ================================================ Upload Multiple image js Start here ================================================
  const fileInputMultiple = document.getElementById("upload-file-multiple");
  const uploadedImgsContainer = document.querySelector(".uploaded-imgs-container");

  fileInputMultiple.addEventListener("change", (e) => {
    const files = e.target.files;

    Array.from(files).forEach(file => {
      const src = URL.createObjectURL(file);

      const imgContainer = document.createElement('div');
      imgContainer.classList.add('position-relative', 'h-120-px', 'w-120-px', 'border', 'input-form-light', 'radius-8', 'overflow-hidden', 'border-dashed', 'bg-neutral-50');

      const removeButton = document.createElement('button');
      removeButton.type = 'button';
      removeButton.classList.add('uploaded-img__remove', 'position-absolute', 'top-0', 'end-0', 'z-1', 'text-2xxl', 'line-height-1', 'me-8', 'mt-8', 'd-flex');
      removeButton.innerHTML = '<iconify-icon icon="radix-icons:cross-2" class="text-xl text-danger-600"></iconify-icon>';

      const imagePreview = document.createElement('img');
      imagePreview.classList.add('w-100', 'h-100', 'object-fit-cover');
      imagePreview.src = src;

      imgContainer.appendChild(removeButton);
      imgContainer.appendChild(imagePreview);
      uploadedImgsContainer.appendChild(imgContainer);

      removeButton.addEventListener('click', () => {
        URL.revokeObjectURL(src);
        imgContainer.remove();
      });
    });

    // Clear the file input so the same file(s) can be uploaded again if needed
    fileInputMultiple.value = '';
  });
  // ================================================ Upload Multiple image js End here  ================================================

  // ================================================ Upload image & show it's name js start  ================================================
  document.getElementById('file-upload-name').addEventListener('change', function(event) {
    var fileInput = event.target;
    var fileList = fileInput.files;
    var ul = document.getElementById('uploaded-img-names');
    
    // Add show-uploaded-img-name class to the ul element if not already added
    ul.classList.add('show-uploaded-img-name');

    // Append each uploaded file name as a list item with Font Awesome and Iconify icons
    for (var i = 0; i < fileList.length; i++) {
        var li = document.createElement('li');
        li.classList.add('uploaded-image-name-list', 'text-primary-600', 'fw-semibold', 'd-flex', 'align-items-center', 'gap-2');
        
        // Create the Link Iconify icon element
        var iconifyIcon = document.createElement('iconify-icon');
        iconifyIcon.setAttribute('icon', 'ph:link-break-light'); 
        iconifyIcon.classList.add('text-xl', 'text-secondary-light');
        
        // Create the Cross Iconify icon element
        var crossIconifyIcon = document.createElement('iconify-icon');
        crossIconifyIcon.setAttribute('icon', 'radix-icons:cross-2');  
        crossIconifyIcon.classList.add('remove-image','text-xl', 'text-secondary-light', 'text-hover-danger-600');

        // Add event listener to remove the image on click
        crossIconifyIcon.addEventListener('click', (function(liToRemove) {
            return function() {
                ul.removeChild(liToRemove); // Remove the corresponding list item
            };
        })(li)); // Pass the current list item as a parameter to the closure
        
        // Append both icons to the list item
        li.appendChild(iconifyIcon);

        // Append the file name text to the list item
        li.appendChild(document.createTextNode(' ' + fileList[i].name));

        li.appendChild(crossIconifyIcon);

        // Append the list item to the unordered list
        ul.appendChild(li);
    }
});
  </script>


</body>

</html>