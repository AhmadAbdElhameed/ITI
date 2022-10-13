import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.css']
})
export class UserComponent implements OnInit {
  userID = 0;

  constructor(myActivated:ActivatedRoute) {
     this.userID = myActivated.snapshot.params['id'];
  }

  ngOnInit(): void {
  }

}
