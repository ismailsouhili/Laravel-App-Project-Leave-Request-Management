import React from "react";


const Register=()=>{
    return(
        <div>
        <div className="limiter">
  <div className="container-login100">
    <div className="wrap-login100">
      <div className="login100-pic js-tilt" data-tilt>
        <img src="images/log.png" alt="IMG" />
      </div>
      <span />
      <form method="POST" action="{{ route('register') }}" className="login100-form validate-form">
      <div className="login100-form">S'inscrire</div>

        <div className="wrap-input100 validate-input">
          <input className="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Prenom" />
          <span className="invalid-feedback" role="alert">
            <strong>{'{'}{'{'} $message {'}'}{'}'}</strong>
          </span>
          <span className="focus-input100" />
          <span className="symbol-input100">
            <i className="fa fa-file-text" aria-hidden="true" />
          </span>
        </div>
        <div className="wrap-input100 validate-input">
          <input className="input100 @error('fname') is-invalid @enderror" type="text" name="fname" placeholder="Nom" />
          <span className="focus-input100" />
          <span className="symbol-input100">
            <i className="fa fa-file-text-o" aria-hidden="true" />
          </span>
        </div>
        <div className="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          <input className="input100 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" />
          <span className="invalid-feedback" role="alert">
            <strong>{'{'}{'{'} $message {'}'}{'}'}</strong>
          </span>
          <span className="focus-input100" />
          <span className="symbol-input100">
            <i className="fa fa-envelope" aria-hidden="true" />
          </span>
        </div>
        <div className="wrap-input100 validate-input" data-validate="Password is required">
          <input className="input100" type="password" name="password" placeholder="Password" />
          <span className="invalid-feedback" role="alert">
            <strong>{'{'}{'{'} $message {'}'}{'}'}</strong>
          </span>
          <span className="focus-input100" />
          <span className="symbol-input100">
            <i className="fa fa-lock" aria-hidden="true" />
          </span>
        </div>
        <div className="wrap-input100 validate-input" data-validate="Password is required">
          <input id="password_confirmation" className="input100 " type="password" name="password_confirmation" placeholder="Password confirmer" />
          <span className="invalid-feedback" role="alert">
            <strong>{'{'}{'{'} $message {'}'}{'}'}</strong>
          </span>
          <span className="focus-input100" />
          <span className="symbol-input100">
            <i className="fa fa-lock" aria-hidden="true" />
          </span>
        </div>
       
        <div className="container-login100-form-btn">
          <button type="submit" className="login100-form-btn">
            S'inscrire
          </button>
        </div>
        <div className="text-center p-t-12">
          <a className="txt1" href="{{ route('login') }}">
            Login
            <i className="fa fa-long-arrow-right m-l-5" aria-hidden="true" />
          </a>
        </div>
      </form>
    </div>
  </div>
</div>

        </div>
    );
}


export default Register;