import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'main.dart';


class EditData extends StatefulWidget{
  final List list;
  final int index;
  EditData ({this.list, this.index});

  @override
  _EditDataState createState() => _EditDataState();
}

class _EditDataState extends State<EditData> {
  TextEditingController namaController = new TextEditingController();
  TextEditingController passwordController = new TextEditingController();
  TextEditingController usernameController = new TextEditingController();

  void editData() {
    var url = "http://10.0.2.2/mahasiswa/editMahasiswa.php";
    http.post(url, body: {
      "id": widget.list[widget.index]['id'],
      "namaMahasiswa": namaController.text,
      "passwordMahasiswa": passwordController.text,
      "usernameMahasiswa": usernameController.text
    });
  }

  @override
  void initState() {
    namaController = new TextEditingController(text: widget.list[widget.index]['nama']);
    passwordController = new TextEditingController(text: widget.list[widget.index]['password']);
    usernameController = new TextEditingController(text: widget.list[widget.index]['username']);
    super.initState();
  }

  @override
  Widget build(BuildContext context) => new Scaffold(
      appBar: new AppBar(
        title: Text('Edit Data Mahasiswa'),
        backgroundColor: Colors.deepPurple,
      ),

      body: Padding(
        padding: const EdgeInsets.all(10.0),
        child: ListView(children: <Widget>[
          new Column(
            children: <Widget>[
              new Padding(padding: new EdgeInsets.only(top: 15.0)),
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
              new Padding(
                padding: new EdgeInsets.all(5.0)
              ),
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

              new Padding(
                padding: new EdgeInsets.all(5.0)
              ),
              new TextField(
                controller: usernameController,
                decoration: new InputDecoration(
                  hintText:  "Input Username Mahasiswa",
                  labelText: "Input Username",
                  border: new OutlineInputBorder(
                    borderRadius: new BorderRadius.circular(20.0)
                  )
                )
              ),

              new Padding(
                padding: const EdgeInsets.all(5.0)
              ),
              new RaisedButton(
                child: new Text("Edit Data"),
                color: Colors.red,
                onPressed: (){
                  editData();
                  Navigator.of(context).push(new MaterialPageRoute(
                    builder: (BuildContext context) => new MyApp()
                  ));
                },
              )
            ],
          )
        ],),
      ),
    );
}