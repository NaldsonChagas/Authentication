import { View } from "./View";

export class ErrorMessage extends View {

  updateSelector(content) {
    this._selector.innerHTML = `<div class="alert alert-danger">
    ${content}</div>`;
  }

}