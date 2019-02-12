import { HttpService } from "./HttpService";

export class UserService {

  login(params) {
    return new Promise((resolve, reject) => {
      HttpService.request('POST', 'login.php', params)
        .then(response => resolve(response), err => reject(err));
    });
  }

  getLoggedUser() {
    return new Promise((resolve, reject) => {
      HttpService.request('GET', 'userLogged.php')
        .then(response => resolve(response), err => reject(err));
    });
  }

}