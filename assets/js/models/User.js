export class User {
  
  constructor(email, password) {
    this._email = email;
    this._password = password;
    this._name;
  }

  get name() {
    return this._name;
  }

  set name(name) {
    this._name = name;
  }

  get email() {
    return this._email;
  }

  get password() {
    return this._password;
  }
}