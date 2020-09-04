﻿using System;

namespace secao06Ex03
{
    class secao06Ex03
    {
        static void Main(string[] args)
        {
            string[] linhasCol = Console.ReadLine().Split(' ');

            int m = int.Parse(linhasCol[0]);
            int n = int.Parse(linhasCol[1]);

            int[,] matriz = new int[m, n];

            for(int i = 0; i < m; i++)
            {
                string[] values = Console.ReadLine().Split(' ');

                for (int j = 0; j < n; j++)
                {
                    matriz[i, j] = int.Parse(values[j]);
                }
            }

            int x = int.Parse(Console.ReadLine());

            for (int i = 0; i < m; i++)
            {
                for (int j = 0; j < n; j++)
                {
                    if (matriz[i,j] == x)
                    {
                        Console.WriteLine($"Position {i},{j}:");
                        if (j > 0)
                        {
                            Console.WriteLine("Left: " + matriz[i, j - 1]);
                        }
                        if (i > 0)
                        {
                            Console.WriteLine("Top: " + matriz[i - 1, j]);
                        }
                        if(j < n - 1)
                        {
                            Console.WriteLine("Right: " + matriz[i, j + 1]);
                        }
                        if (i < m - 1)
                        {
                            Console.WriteLine("Down: " + matriz[i + 1, j]);
                        }
                    }
                }
            }
        }
    }
}
