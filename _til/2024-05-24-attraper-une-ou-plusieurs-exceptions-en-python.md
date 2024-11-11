---
layout: til
title: Attraper une ou plusieurs exceptions en Python
tags: python
---

```python
try:
  # ...
except ZeroDivisionError as e:
  print(e)
  raise # re raise that exception
except ValueError:
  print("Write a number")
finally:
  cleanup()
```



