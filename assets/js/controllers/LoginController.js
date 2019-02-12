import { UserService } from "../service/UserService";

export class LoginController {

  constructor() {

    const $ = document.querySelector.bind(document);

    this._form = $('#login-form');

    this._emailEl = $('#email');
    this._passwordEl = $('#password');
    this._userService = new UserService();
  }

  login() {
    this._form.addEventListener('submit', (event) => {
      event.preventDefault();

      this._userService.login(this._getParams())
        .then(response => {
          window.location.href = 'welcome.php';
        }, err => console.log(err));
    });
  }

  _getParams() {
    return `email=${this._emailEl.value}&password=${this._passwordEl.value}`;
  }

}