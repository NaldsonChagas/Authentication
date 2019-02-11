import { UserService } from "../service/UserService";

export class WelcomeController {

  constructor() {
    this._userService = new UserService();

    this._userEl = document.querySelector('#userEl');
  }

  getLoggedUser() {
    this._userService.getLoggedUser()
      .then(name => {
        this._userEl.innerHTML = `Logado como ${name}`;
      }, err => console.log(err));
  }

}