import { LoginController } from "./controllers/LoginController";
import { WelcomeController } from "./controllers/WelcomeController";

const loginController = new LoginController();
loginController.login();

const controller = new WelcomeController();
controller.getLoggedUser();