@extends('admin.layout')
@section('title', 'Galerias')

@push('css')
  <link href="{{ asset('dash/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('dash/assets/libs/dropify/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Lightbox css -->
  <link href="{{ asset('dash/assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('conteudo')
  <!-- Start Content-->
  <div class="container-fluid">
                          
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Galeria {{ $noticia->titulo }}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @include('custom.alert')

    <!--============================ TABELA DE CONTEUDO ============================-->  
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <form action="{{ route('admin.galerias.store', $noticia->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                  <input type="file" name="images[]" id="input-images" data-plugins="dropify" data-height="200" multiple/>
                  
                  <div id="images-preview" class="mt-3">
                    <!-- Aqui as imagens selecionadas serão exibidas -->
                  </div>

                  <div class="mt-3 text-end">
                    <button class="btn input-group-text btn-dark waves-effect waves-light" type="submit">Cadastrar Fotos</button>
                  </div>
              </form>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
              <div class="row">
                @if ($images->isEmpty())
                    <p>Nenhuma imagem disponível.</p>
                @else
                @foreach($images as $image)
                  <div class="col-lg-2">
                    <div class="gal-box">
                      <a href="{{ url('storage/' . $image->image_path) }}" class="image-popup" title="Screenshot-1">
                          <img src="{{ url('storage/' . $image->image_path) }}" class="img-fluid" alt="work-thumbnail">
                      </a>
                      <div class="gall-info">
                          <h6 class="font-12 mt-0">{{ $image->image_path }}</h6>

                          <a href='galerias/delete-{{ $image->id }}' class="gal-like-btn" data-bs-toggle='modal' data-bs-target='#galerias/delete-{{ $image->id }}'><i class='dripicons-trash'></i></a> 
                          <!-- Danger Alert Modal -->
                          <div id='galerias/delete-{{ $image->id }}' class='modal fade' tabindex='-1' role='dialog' aria-hidden='true'>
                              <div class='modal-dialog modal-sm'>
                                  <div class='modal-content modal-filled bg-danger'>
                                      <div class='modal-body p-4'>
                                          <div class='text-center'>
                                              <i class='dripicons-wrong h1 text-white'></i>
                                              <h4 class='mt-2 text-white'>ATENÇÃO</h4>
                                              <p class='mt-3 text-white'>Tem certeza que deseja excluir essa imagem</p>
                                              <form action="{{ route('admin.galerias.delete', ['noticia' => $noticia->id, 'galeria' => $image]) }}" method='POST'>
                                                @method('DELETE')
                                                @csrf
                                                <button type='submit' class='btn btn-light my-2'>Excluir</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                          <!-- end MODAL DELETE -->

                      </div> <!-- gallery info -->
                    </div> <!-- end gal-box -->
                  </div>
                @endforeach
                @endif
              </div>
          </div>
        </div>
      </div>
    </div>
    <!--============================ end TABELA DE CONTEUDO ============================-->

  </div> <!-- container -->
@endsection
@push('scripts')
  <!-- Magnific Popup-->
  <script src="{{ asset('dash/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

  <!-- Gallery Init-->
  <script src="{{ asset('dash/assets/js/pages/gallery.init.js') }}"></script>

  <script src="{{ asset('dash/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
  <script src="{{ asset('dash/assets/libs/dropify/js/dropify.min.js') }}"></script>

  <!-- Init js-->
  <script src="{{ asset('dash/assets/js/pages/form-fileuploads.init.js') }}"></script>

  <script>
    $(document).ready(function () {
        // Inicializar o Dropify
        $('#input-images').dropify();

        // Adicionar evento para exibir todas as imagens selecionadas
        $('#input-images').on('change', function () {
            var imagesPreview = $('#images-preview');
            imagesPreview.empty();

            var files = this.files;
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function (e) {
                    imagesPreview.append('<img src="' + e.target.result + '" class="img-thumbnail m-2" style="max-width: 150px; max-height: 150px;">');
                }

                reader.readAsDataURL(file);
            }
        });
    });
  </script>
@endpush