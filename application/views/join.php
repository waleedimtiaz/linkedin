<div class="container">
      <div class="alert alert-error myerrorbar">
      <img class="error-icon" src="http://localhost/linkedin/images/error.png" /> <span class="error-text">Please correct the marked field(s) below.</span>
      </div>
      <div class="wrapper-join">
          
        
          <div class="form-right">
          
          <div class="form-box">
            <form id="join-form" class="join-form" onsubmit="return reg_validation()" method="post" action="asd.php">
              <div class="field-wrapper">
                <label for="fname-reg">First Name: </label>
                <div class="field-error">
                  <span id="fname-reg-error" class="form-error-text"></span>
                  <input type="text" id="fname-reg" name="fname" />
                </div>
              </div>
              <div class="field-wrapper">
                <label for="lname-reg">Last Name: </label>
                <div class="field-error">
                  <span id="lname-reg-error" class="form-error-text"></span>
                    <input type="text" id="lname-reg" name="lname" />
                  </div>
              </div>
              <div class="field-wrapper">
                <label for="email-reg">Email: </label>
                <div class="field-error">
                  <span id="email-reg-error" class="form-error-text"></span>
                    <input type="text" id="email-reg" name="email" />
                </div>    
              </div>
              <div class="field-wrapper field-wrapper-password">
                <label for="pwd-reg">Password: </label>
                <div class="field-wrapper">
                  <span id="pwd-reg-error" class="form-error-text"></span>
                    <input type="password" id="pwd-reg" name="password" />
                </div>    
                <p>6 or more characters</p>
              </div>
              
              <button type="submit" class="btn btn-success">Join Now</button> <span class="asterik">*</span>
              <p class="already-on-linkedin-message">Already on LinkedIn?
                <a href="signup.html">Sign in.</a>
              </p>
            </form>
          </div>
          </div>
      
          
          
          
            <div class="agreement">
              <strong>*</strong>
            By joining LinkedIn, you agree to linkedIn's
            <div class="agreement-links">
               <a href="what_is_linkedin.html">User Agreement</a>
               ,
               <a href="what_is_linkedin.html">Privacy Policy</a>
               and
               <a href="what_is_linkedin.html">Cookie Policy</a>
               .
            </div>
          </div>
          
      
          
      
        </div>
    </div>