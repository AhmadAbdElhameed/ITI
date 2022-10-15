import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-parent',
  templateUrl: './parent.component.html',
  styleUrls: ['./parent.component.css']
})
export class ParentComponent implements OnInit {
//arraypush all obj
DataFromReg="";

  getData(data:any){
    console.log(data);
    this.DataFromReg=data;

  }
  constructor() { }

  ngOnInit(): void {
  }

}
