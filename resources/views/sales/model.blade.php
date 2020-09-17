<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document" style="max-width:1200px;">
        <div class="modal-content">
            <div class="modal-header">Payment</div>
            <div class="modal-body">
                <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <form method="POST" action="{{ url('/bills') }}" accept-charset="UTF-8" class="form-horizontal text-center" enctype="multipart/form-data">
                                            {{ csrf_field() }} 
                                            <div class="form-group form-inline">
                                                <label class="col-lg-4">ยอดที่จ่าย</label> 
                                                <div class="col-lg-2">
                                                    <input class="form-control" value="{{ number_format($sales->sum('total')) }}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group form-inline">
                                                <label class="col-lg-4">รับเงินมา</label> 
                                                <div class="col-lg-2">
                                                    <input class="form-control" value="{{ number_format($sales->sum('total')) }}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group form-inline">
                                                <label class="col-lg-4">เงินทอน</label> 
                                                <div class="col-lg-2">
                                                    <input class="form-control" value="{{ number_format($sales->sum('total')) }}" readonly>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-sm">สั่งสินค้า</button> 
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <div class="calculator card">
                                            <input type="text" class="calculator-screen z-depth-1" value="" disabled />
                                            <div class="calculator-keys">
                                                <button type="button" value="7" class="btn btn-light waves-effect">7</button>
                                                <button type="button" value="8" class="btn btn-light waves-effect">8</button>
                                                <button type="button" value="9" class="btn btn-light waves-effect">9</button>
                                                <button type="button" value="4" class="btn btn-light waves-effect">4</button>
                                                <button type="button" value="5" class="btn btn-light waves-effect">5</button>
                                                <button type="button" value="6" class="btn btn-light waves-effect">6</button>
                                                <button type="button" value="1" class="btn btn-light waves-effect">1</button>
                                                <button type="button" value="2" class="btn btn-light waves-effect">2</button>
                                                <button type="button" value="3" class="btn btn-light waves-effect">3</button>
                                                <button type="button" value="0" class="btn btn-light waves-effect">0</button>
                                                <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
                                                <button type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>
                                                <button type="button" class="equal-sign operator btn btn-default" value="=">=</button>
                                                <button type="button" class="operator btn btn-info" value="+">+</button>
                                                <button type="button" class="operator btn btn-info" value="-">-</button>
                                                <button type="button" class="operator btn btn-info" value="*">&times;</button>
                                                <button type="button" class="operator btn btn-info" value="/">&divide;</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
  const calculator = {
  displayValue: '{{ number_format($sales->sum('total')) }}',
  firstOperand: null,
  waitingForSecondOperand: false,
  operator: null,
};

function inputDigit(digit) {
  const { displayValue, waitingForSecondOperand } = calculator;

  if (waitingForSecondOperand === true) {
    calculator.displayValue = digit;
    calculator.waitingForSecondOperand = false;
  } else {
    calculator.displayValue = displayValue === '0' ? digit : displayValue + digit;
  }
}

function inputDecimal(dot) {
  // If the `displayValue` does not contain a decimal point
  if (!calculator.displayValue.includes(dot)) {
    // Append the decimal point
    calculator.displayValue += dot;
  }
}

function handleOperator(nextOperator) {
  const { firstOperand, displayValue, operator } = calculator
  const inputValue = parseFloat(displayValue);

  if (operator && calculator.waitingForSecondOperand)  {
    calculator.operator = nextOperator;
    return;
  }

  if (firstOperand == null) {
    calculator.firstOperand = inputValue;
  } else if (operator) {
    const currentValue = firstOperand || 0;
    const result = performCalculation[operator](currentValue, inputValue);

    calculator.displayValue = String(result);
    calculator.firstOperand = result;
  }

  calculator.waitingForSecondOperand = true;
  calculator.operator = nextOperator;
}

const performCalculation = {
  '/': (firstOperand, secondOperand) => firstOperand / secondOperand,

  '*': (firstOperand, secondOperand) => firstOperand * secondOperand,

  '+': (firstOperand, secondOperand) => firstOperand + secondOperand,

  '-': (firstOperand, secondOperand) => firstOperand - secondOperand,

  '=': (firstOperand, secondOperand) => secondOperand
};

function resetCalculator() {
  calculator.displayValue = '0';
  calculator.firstOperand = null;
  calculator.waitingForSecondOperand = false;
  calculator.operator = null;
}

function updateDisplay() {
  const display = document.querySelector('.calculator-screen');
  display.value = calculator.displayValue;
}

updateDisplay();

const keys = document.querySelector('.calculator-keys');
keys.addEventListener('click', (event) => {
  const { target } = event;
  if (!target.matches('button')) {
    return;
  }

  if (target.classList.contains('operator')) {
    handleOperator(target.value);
		updateDisplay();
    return;
  }

  if (target.classList.contains('decimal')) {
    inputDecimal(target.value);
		updateDisplay();
    return;
  }

  if (target.classList.contains('all-clear')) {
    resetCalculator();
		updateDisplay();
    return;
  }

  inputDigit(target.value);
  updateDisplay();
});
</script>

