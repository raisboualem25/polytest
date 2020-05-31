<!-- head -->
@include('includes.head')
<body>
    <div class="container">
        <p><a href="/"><i class="fa fa-home"></i> Accueil</a></p>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <div class="row">
        @foreach($data['data'] as $key => $value)
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="panel panel-default userlist">
                  <div class="panel-heading">
                    <a href="/user/{{$data['data'][$key]['id']}}" class="availablity btn btn-circle btn-success"><i class="fa fa-info"></i></a> 
                  </div>
                  <div class="panel-heading">                
                  <div class="panel-body text-center">
                    <div class="userprofile">
                      <div class="userpic"> <img src="{{$data['data'][$key]['avatar']}}" alt="" class="userpicimg"> </div>
                      <h3 class="username" id="username_{{ $data['data'][$key]['id'] }}">
                        <span id="firstname_{{ $data['data'][$key]['id'] }}">{{$data['data'][$key]['first_name']}}</span> 
                        <span id="lastname_{{ $data['data'][$key]['id'] }}">{{$data['data'][$key]['last_name']}}</span>
                      </h3>
                      <p><a id="email_{{ $data['data'][$key]['id'] }}" href="mailto:info@maxartkiller.in">{{$data['data'][$key]['email']}}</a></p>
                    </div>
                      
                    </div>
                    <div class="panel-footer col-md-12"> 
                        <button type="button" class="col-md-5 btn btn-warning float-left modifier" 
                                data-toggle="modal" data-target="#exampleModalCenter2" data="{{ $data['data'][$key]['id'] }}">Modifier</button>
                        <button type="button" class="col-md-5 btn btn-danger float-right supprimer" data="{{ $data['data'][$key]['id'] }}"
                            data-toggle="modal" data-target="#exampleModal">Supprimer</button>
                    </div>
                </div>
              </div>          
            </div>    
        @endforeach
        </div>
        <div class="col-md-12 ">
            <nav aria-label="Page navigation example">
                <ul class="col-md-12 pagination ">            
                    @for ($i = 1; $i <= $data['total_pages']; $i++)
                        @if ($i == $data['page'])                      
                            @php $class = 'curent_page' @endphp
                        @else
                            @php  $class = '' @endphp
                        @endif
                        <li class="page-item"><a href="/{{$i}}" class="{{$class}}">{{$i}}</a></li>
                    @endfor 
                    <li class="page-item"><button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModalCenter">Ajouter</button></li>  
                </ul>
            </nav>
        </div>
        <!-- Modal Ajouter Utilisateur-->
        @include('includes.modal_add')


        <!-- Modal Supprimer Utilisateur-->
        @include('includes.modal_supp')

        <!-- Modal Modifier Utilisateur-->
        @include('includes.modal_modif')
    </div>  
    <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>

