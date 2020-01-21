import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'main.dart';

class AddData extends StatefulWidget {
  _AddDataState createstate() => _AddDataState();

  @override
  State<StatefulWidget> createState() => null;

}

class _AddDataState extends State<AddData> {
  TextEditingController namaController = new TextEditingController();
  TextEditingController passwordController = new TextEditingController();
  TextEditingController usernameController = new TextEditingController();


  void addData(){
    var url = "http://10.0.2.2/mahasiswa/tambahMahasiswa.php";
    http.post(url, body: {
      "namaMahasiswa": namaController.text,
      "passwordMahasiswa": passwordController.text,
      "usernameMahasiswa": usernameController.text
    });
  }

  @override
  Widget build(BuildContext context) {
    return new Scaffold(
      appBar: new AppBar(
        title: Text("Tambah Data Mahasiswa"),
        backgroundColor: Colors.purple,
      ),
      body: Padding(
        padding: const EdgeInsets.all(10.0),
        child: ListView(children: <Widget>[
          new Column(
            children: <Widget>[
              new Padding(padding: new EdgeInsets.only(
                top: 15.0
              )),
              new TextField(
                controller: namaController,
                decoration: new InputDecoration(
                  hintText: "Input Nama Mahasiswa",
                  labelText: "Nama Mahasiswa",
                  border: new OutlineInputBorder(
                    borderRadius: new BorderRadius.circular(20.0)
                  )
                )
              ),

              new Padding(padding: new EdgeInsets.all(5.0)),
              new TextField(
                controller: passwordController,
                decoration: new InputDecoration(
                  hintText: "Input Password Mahasiswa",
                  labelText: "Password Mahasiswa",
                  border: new OutlineInputBorder(
                    borderRadius: new BorderRadius.circular(20.0)
                  )
                )
              ),

              new Padding(padding: new EdgeInsets.all(5.0)),
              new TextField(
                controller: usernameController,
                decoration: new InputDecoration(
                  hintText: "Input Username Mahasiswa",
                  labelText: "Username Mahasiswa",
                  border: new OutlineInputBorder(
                    borderRadius: new BorderRadius.circular(20.0)
                  )
                )
              ),

              new Padding(padding: new EdgeInsets.all(5.0)),
              new RaisedButton(
                child: new Text("Tambah Data"),
                color: Colors.purple,
                onPressed: () {
                  //addData();
                  //untuk upload image
                  addData();
                  Navigator.of(context).push(new MaterialPageRoute(
                    builder: (BuildContext context) => new MyApp()
                  ));
                },
              )                     
            ],
          ), 
        ],),
      ),
    );
  }

}  