export class HttpService {

  static request(method, url, params) {
    return new Promise((resolve, reject) => {
      const xhr = new XMLHttpRequest();

      xhr.open(method, url);

      xhr.onreadystatechange = () => {
        if (xhr.readyState == 4) {
          if (xhr.status == 200) {
            resolve(xhr.responseText);
          } else {
            reject(xhr.responseText);
          }
        }
      }

      if (params) {
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(params);
      }
      else xhr.send();
    });
  }
}