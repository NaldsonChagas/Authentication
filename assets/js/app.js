import { LoginController } from "./controllers/LoginController";
import { WelcomeController } from "./controllers/WelcomeController";


switch (document.URL) {
  case 'http://localhost/register-and-login/welcome.php':
    const controller = new WelcomeController();
    controller.getLoggedUser();
    break;
  default:
    const loginController = new LoginController();
    loginController.login();
}