import 'package:flutter/material.dart';
import 'home_page.dart'; // Pastikan file home_page.dart berada di folder yang sama
// Pastikan file second_page.dart berada di folder yang sama
// Pastikan file user.dart berada di folder models

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Flutter Demo',
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      home: const HomePage(), // Pastikan HomePage sudah didefinisikan
    );
  }
}