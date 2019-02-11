import { HttpService } from "./HttpService";

export class UserService {

  getLoggedUser() {
    return new Promise((resolve, reject) => {
      HttpService.request('GET', 'userLogged.php')
        .then(response => resolve(response), err => reject(err));
    });
  }

}