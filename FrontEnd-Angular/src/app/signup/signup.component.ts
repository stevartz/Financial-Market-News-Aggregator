import { Component } from '@angular/core';
import { signup } from './signup';
import {
  HttpClient,
  HttpErrorResponse,
  HttpParams,
} from '@angular/common/http';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.css'],
})
export class SignupComponent {
  title1 = 'Financial News Aggregator';
  title2 = 'Signup here';

  gender = ['Male', 'Female', 'Other'];
  signupModel = new signup('', '', '', '', null, '', '', '');
  //signupModel: signup;

  constructor(private http: HttpClient) {
    //this.signupModel = new signup('', '', '', '', null, '', '', '');
  }

  // Assume we want to send a request to the backend when the form is submitted
  // so we add code to send a request in this function

  data_submitted = '';

  // Let's create a property to store a response from the back end
  // and try binding it back to the view
  response: any;

  // passing in a form variable of type any, no return result
  // this version of onSubmit sends a single order to a php

  // passing in a form variable of type any, no return result
  onSubmit(form: any): void {
    console.log(this.signupModel.firstname);

    console.log('You submitted value: ', form);
    this.data_submitted = form;

    // Convert the form data to json format
    let params = JSON.stringify(form);

    // http.get() and http.post() returns observable<Order>,
    // then we subscribe to this observable

    // To send a GET request, use the concept of URL rewriting to pass data to the backend
    // this.http.get<any>('http://localhost/cs4640/ng-php/ng-http-get.php?str='+params)
    // To send a POST request, pass data as an object

    this.http
      .post<any>('http://localhost/Backend/register_users.php/', params)
      .subscribe(
        (data) => {
          // Receive a response successfully, do something here
          // console.log('Response from backend ', data);
          //this.response = data;
          if (data['feedback'] == 'Username taken!') {
            this.response = 'Username taken!';
            // console.log(data);
          } else if (data['firstname'] != null) {
            window.location.href =
              'http://localhost/signupFeedback.php/' +
              '?firstname=' +
              data['firstname'] +
              '&lastname=' +
              data['lastname'] +
              '&username=' +
              data['username'] +
              '&email=' +
              data['email'] +
              '&phone=' +
              data['phone'] +
              '&gender_option=' +
              data['gender_option'];
          }
          // the subscribe above means that this observable takes (data) being emitted
          // and set it to this.response

          // console.log('response data ', this.response);
        },
        (error) => {
          // An error occurs, handle an error in some way
          console.log('Error ', error);
        }
      );
  }
}
