"Циклы могут ускорить работу программы. Рекурсия может ускорить работу программиста. Выбирайте, что важнее в вашей ситуации".

Стек вызовов. Новые элементы добавляются в начало списка (последним вставлен - первым извлечен).
Стек принадлежит к числу структур данных LIFO: last in first out

Когда функция вызывается из другой функции, вызывающая функция приостанавливается в частично завершенном состоянии.
Все значения переменных этой функции остаются в памяти, а когда выполнении вызываемой функции завершится, управление вернется
вызывающий функции и продолжит выполнение с того места, где оно прервалось.

Стек вызовов с рекурсией.
Стек удобен, но сохранение всей промежуточной информации может привести к значительным затратам памяти.
В таком случае: 1. переписать код с использованием цикла; 2. воспользоваться "хвостовой рекурсией".