<div class="vs-component con-vs-dialog vs-dialog-primary modal" id="accept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
  <div class="vs-dialog">
    <header class="vs-dialog-header">
      <div class="con-title-after">
        <span class="after"></span>
        <h3 class="dialog-title">Dialog</h3>
      </div><!---->
    </header> 
    <div class="vs-dialog-text"> Are you sure you want to deactivate your account? </div>
    <footer>
      {!!Form::open(['action' => ['NewsController@deleteUser',  Auth::id() ], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Accept', ['class' => 'vs-component vs-button vs-dialog-accept-button vs-button-primary vs-button-filled', 'onclick' => "return userConfunction();"])}}
      {!!Form::close()!!}
      <button type="button" name="button" class="vs-component  vs-button vs-dialog-cancel-button vs-button-primary vs-button-flat" style="background: transparent; color: rgba(0, 0, 0, 0.5);" data-dismiss="modal" aria-label="Close">
        <span class="vs-button-backgroundx vs-button--background" style="opacity: 1; left: 20px; top: 20px; width: 0px; height: 0px; transition: width 0.3s ease 0s, height 0.3s ease 0s, opacity 0.3s ease 0s;"></span>
        <!----><span class="vs-button-text vs-button--text">Cancel</span>
        <span class="vs-button-linex" style="top: auto; bottom: -2px; left: 50%; transform: translate(-50%);"></span>
      </button>
    </footer>
  </div>
</div>