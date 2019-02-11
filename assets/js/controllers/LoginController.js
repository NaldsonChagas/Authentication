export class LoginController {

  constructor() {

    const $ = document.querySelector.bind(document);

    this._form = $('form');

    this._emailEl = $('#name');
    this._passwordEl = $('#password');
  }

  login() {
    this._form.addEventListener('submit', (event) => {
      
    });
  }

}