@extends('admin.layout')
@section('title', 'Time Line')

@section('conteudo')
  <!-- Start Content-->
  <div class="container-fluid">
                          
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Timeline</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!--============================ TABELA DE CONTEUDO ============================-->
    <div class="row">
      <div class="col-12">
          <div class="timeline">

            @foreach($audits as $index => $audit)
            @php
                $left = $index % 2 === 0; // Alterna entre esquerda e direita
                $date = $audit->created_at->format('d M Y'); // Formata a data
                $modelName = class_basename($audit->auditable_type); // Extrai o nome da classe
                // Determina a URL correta
                if (in_array($audit->event, ['created', 'updated'])) {
                  $url = '' . strtolower($modelName) . 's/edit/'. $audit->auditable_id .'';
                } else {
                  $url = $audit->url;
                }
                $eventNames = [
                    'created' => 'Criado',
                    'updated' => 'Atualizado',
                    'deleted' => 'Excluído',
                    'restored' => 'Restaurado'
                ];
                $eventName = isset($eventNames[$audit->event]) ? $eventNames[$audit->event] : $audit->event;
            @endphp
            
            <!-- Mostrar data no topo -->
            @if($index === 0 || $audits[$index - 1]->created_at->format('d M Y') !== $date)
            <article class="timeline-item">
                <h2 class="m-0 d-none">&nbsp;</h2>
                <div class="time-show">
                    <a href="#" class="btn btn-primary width-lg">{{ $date }}</a>
                </div>
            </article>
            @endif
    
            <article class="timeline-item {{ $left ? 'timeline-item-left' : '' }}">
                <div class="timeline-desk">
                    <div class="timeline-box">
                        <span class="arrow{{ $left ? '-alt' : '' }}"></span>
                        <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                        <h4 class="mt-0 font-16">
                            <a href="{{ $url }} ">{{ $modelName }} </a>
                            {{ $eventName }} 
                            @if($audit->user)
                                por <a href="{{ route('admin.users.edit', $audit->user->id) }}">{{ $audit->user->name }}</a>
                            @else
                                por Usuário desconhecido
                            @endif
                        </h4>
                        <p class="text-muted"><small>{{ $audit->created_at->format('H:i a') }}</small></p>
                    </div>
                </div>
            </article>
            @endforeach

              
          </div>
          <!-- end timeline -->
      </div> <!-- end col -->
  </div>
  <!-- end row -->
  <!--============================ end TABELA DE CONTEUDO ============================-->

  </div> <!-- container -->
@endsection