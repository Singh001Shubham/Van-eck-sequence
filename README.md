# Van-eck-sequence
Coding : to print Van Eck sequence
(Note: Candidate will be able to see following description, and a YouTube
video about Van Eck sequence at the time ).
Write code in your favoruite programming language to print the "Van Eck
Sequence" for the first 100 positions.
Sequence is defined as below:
• You start with number 0 at the first position.
• For the next number, if you have seen the number at current position
before, the next number is the distance between current position and the
position where you saw this number before.
• If you haven't seen this number before, print 0.
So, you start with 0. You haven't seen 0 before, so next number is also 0. But,
now the next number is 1 -- because you saw 0 at position 1 and position 2. You
haven't seen 1 before, so next number is 0. You saw 0 at position 2 and position
4, so the next number is 2. And so on...
0, 0, 1, 0, 2, 0, 2, 2, 1, 6, 0, 5, 0, 2, 6, 5, 4, 0, 5, 3, 0, 3, 2, 9, 0, 4, 9, 3, 6, 14, 0,
6, 3, 5, 15, 0,...