    <!-- head -->
    @include('includes.head')
<body>
    <div class="container">
        <p><a href="/"><i class="fa fa-home"></i> Accueil</a></p>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="panel panel-default userlist">
                  <div class="panel-heading">                
                  <div class="panel-body text-center">
                    <div class="userprofile">
                      <div class="userpic"> <img src="{{$data['data']['avatar']}}" alt="" class="userpicimg"> </div>
                      <h3 class="username" id="username_{{ $data['data']['id'] }}">
                        <span id="firstname_{{ $data['data']['id'] }}">{{$data['data']['first_name']}}</span> 
                        <span id="lastname_{{ $data['data']['id'] }}">{{$data['data']['last_name']}}</span>
                      </h3>
                      <p><a id="email_{{ $data['data']['id'] }}" href="mailto:info@maxartkiller.in">{{$data['data']['email']}}</a></p>
                    </div>
                      
                    </div>
                    <div class="panel-footer col-md-12"> 
                        <button type="button" class="col-md-5 btn btn-warning float-left modifier"
                                data-toggle="modal" data-target="#exampleModalCenter2" data="{{ $data['data']['id'] }}">Modifier</button>
                        <button type="button" class="col-md-5 btn btn-danger float-right supprimer" data="{{ $data['data']['id'] }}"
                            data-toggle="modal" data-target="#exampleModal">Supprimer</button>
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    </div>
                </div>
              </div>          
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6">
                <div class="panel panel-default userlist">
                  <div class="panel-heading">                
                  <div class="panel-body text-center">
                    <div class="userprofile">                      
                      <h3 class="username" >{{$data['ad']['company']}}</h3>
                      <p><a href="{{$data['ad']['url']}}">{{$data['ad']['url']}}</a></p>
                      <p>{{$data['ad']['text']}}</p>
                    </div>                      
                  </div>
                </div>
              </div>          
            </div> 
            
        </div>
    </div>
    <!-- Modal Supprimer Utilisateur-->
    @include('includes.modal_supp') 
    <!-- Modal Modifier Utilisateur-->
    @include('includes.modal_modif')
     <script src="{{ asset('js/script.js')}}"></script>   
</body>
</html>

