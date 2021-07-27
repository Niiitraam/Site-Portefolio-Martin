<div class="d-flex flex-column justify-content-center align-items-center mt-5 reveal-2">
    <p class="titre text-center mb-5">Contactez moi</p>
    <div class="background-contact w-75 bg-b">
        <form class="p-5" action="/" method="POST">
            @csrf
            <div class="mb-3">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label color">Nom Prénom *</label>
                <input type="text" class="bg-dark" style="cursor: none" id="exampleInputName" @error('name')is-invalid @enderror name="name" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$errors->first('name')}}
                    </div>
                @enderror
                  </div>
              <label for="exampleInputEmail1" class="form-label color">Email *</label>
              <input type="email" class="bg-dark" id="exampleInputEmail1" style="cursor: none" aria-describedby="emailHelp" @error('email')is-invalid @enderror name="email" value="{{old('email')}}">
              @error('email')
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputMessage" class="form-label color">Message *</label>
                <textarea id="" cols="100" rows="100" class="bg-dark" style="height: 150px; cursor:none" @error('message')is-invalid @enderror name="message" value="{{old('message')}}"></textarea>
                @error('message')
                    <div class="invalid-feedback">
                        {{$errors->first('message')}}
                    </div>
                @enderror
              </div>
           
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn pl-4 pr-4" style="cursor: none" id="bg-button">Submit</button>
              </div>
            
          </form>
    </div>
</div>
