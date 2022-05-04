/**
 *
 * AuthRegister
 *
 * Pages.Authentication.Register.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class AuthRegister {
  constructor() {
    // Initialization of the page plugins
    this._initForm();
  }

  // Form validation
  _initForm() {
    const form = document.getElementById('registerForm');
    if (!form) {
      return;
    }
    const validateOptions = {
      rules: {
        registerEmail: {
          required: true,
          email: true,
        },
        registerPassword: {
          required: true,
          minlength: 6,
          regex: /[a-z].*[0-9]|[0-9].*[a-z]/i,
        },
        registerCheck: {
          required: true,
        },
        registerName: {
          required: true,
        },
      },
      messages: {
        registerEmail: {
          email: 'Inserisci una email valida.',
        },
        registerPassword: {
          minlength: 'La password deve avere almeno {0} caratteri',
          regex: 'La password deve contenere una lettera e un numero.',
        },
        registerCheck: {
          required: 'Accetta le nostre condizioni.',
        },
        registerName: {
          required: 'Campo obbligatorio.',
        },
      },
    };
    jQuery(form).validate(validateOptions);
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      event.stopPropagation();
      if (jQuery(form).valid()) {
        const formValues = {
          email: form.querySelector('[name="registerEmail"]').value,
          password: form.querySelector('[name="registerPassword"]').value,
          name: form.querySelector('[name="registerName"]').value,
          check: form.querySelector('[name="registerCheck"]').checked,
        };
        console.log(formValues);
        return;
      }
    });
  }
}
