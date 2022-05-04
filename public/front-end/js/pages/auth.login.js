/**
 *
 * AuthLogin
 *
 * Pages.Authentication.Login.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class AuthLogin {
  constructor() {
    // Initialization of the page plugins
    this._initForm();
  }

  // Form validation
  _initForm() {
    const form = document.getElementById('loginForm');
    if (!form) {
      return;
    }
    const validateOptions = {
      rules: {
        email: {
          required: true,
          email: true,
        },
      },
      messages: {
        email: {
          email: 'Inserisci una email valida.',
        },
      },
    };
    jQuery(form).validate(validateOptions);
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      event.stopPropagation();
      if (jQuery(form).valid()) {
        const formValues = {
          email: form.querySelector('[name="email"]').value,
          password: form.querySelector('[name="password"]').value,
          check: form.querySelector('[name="loginCheck"]').checked,
        };
        console.log(formValues);
        return;
      }
    });
  }
}
