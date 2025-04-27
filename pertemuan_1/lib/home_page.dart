import 'package:flutter/material.dart';
import 'second_page.dart'; // Tambahkan import untuk SecondPage

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Home Page'),
      ),
      body: Center(
        child: ElevatedButton(
          onPressed: () {
            Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => const SecondPage(), // Pastikan SecondPage sudah didefinisikan
              ),
            );
          },
          child: const Text('Go to Second Page'),
        ),
      ),
    );
  }
}