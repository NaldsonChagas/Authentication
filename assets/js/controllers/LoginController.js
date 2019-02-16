import { UserService } from "../service/UserService";
import { User } from "../models/User";
import { View } from "../views/View";
import { ErrorMessage } from "../views/ErroMessage";

export class LoginController {

  constructor() {

    const $ = document.querySelector.bind(document);

    this._form = $('#login-form');
    this._errMessageEl = $('.wrong-user-alert');

    this._emailEl = $('#email');
    this._passwordEl = $('#password');

    this._userService = new UserService();
    this._errorMessage = new ErrorMessage(this._errMessageEl);
  }

  login() {
    this._form.addEventListener('submit', (event) => {
      event.preventDefault();

      this._userService.login(this._getParams())
        .then(response => {
          window.location.href = 'welcome.php';
        }, err => {
          this._errorMessage.updateSelector(err);
        });
    });
  }

  _getParams() {
    const user = this._createUser();
    return `email=${user.email}&password=${user.password}`;
  }

  _createUser() {
    return new User(this._emailEl.value, this._passwordEl.value);
  }
}