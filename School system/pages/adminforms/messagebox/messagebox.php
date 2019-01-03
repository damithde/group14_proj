<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>


<style>
    .tag-input-ctn {
    border: 1px solid #ccc;
    padding: 2px 3px;
    display: inline-block;
    width: 500px;
    border-radius: 3px;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.075);
    }
    .tag-input-ctn input {
    display: inline-block;
    float: left;
    height: 18px;
    padding: 0px;
    font-size: 13px;
    line-height: 18px;
    color: black;
    border: 0px;
    margin: 2px;
    }
    .tag-input-ctn input:focus {
    outline: 0;
    box-shadow: 0px;
    }
    .tag-input-ctn .input-tag {
    padding: 2px 4px;
    line-height: 12px;
    font-size: 11px;
    background-color: #e3eaf6;
    display: inline-block;
    float: left;
    border-radius: 2px;
    margin: 2px 5px 2px 0px;
    border: 1px solid #a9b6d2;
    }
    .tag-input-ctn .input-tag .delete-tag {
    display: inline-block;
    font-size: 12px;
    cursor: pointer;
    padding: 0px 2px;
    }
    .tag-input-ctn .input-tag .delete-tag:hover {
    background-color: #96b4d2;
    }

</style>

<section class="content-wrapper">
    <section class="content-header">
    <!--        main row-->
        <div class="row">
            <div class="col-md-12">

    <!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Message </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1">Student Id:</label>
                                    <label style="color:#CCCCCC">(Seperate with commas)</label>
                                    <!-- <input type="email" class="form-control" id="studentIdText" placeholder="Enter Student Id"> -->
                                    <div ng-app='tag-input'>
                                        <tag-input taglist='listone'></tag-input>
                                     </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Message:</label>
                                <textarea class="form-control" id="messageTxt" rows="3" placeholder="Enter messege here"></textarea>
                            </div>
                            <div class="box-footer">
                                <div class="col-md-10"></div>
                                <button type="submit" class="btn btn-primary" style="width:150px">Send</button>
                            </div>
                            <div class="box-footer">

                            
                            

                    </form>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<script>
    var stdFName = document.getElementById("studentIdText").value;
    var stdLName = document.getElementById("studentNameTxt").value;
    var stdLName = document.getElementById("messageTxt").value;
</script>

<?php include_once('../admincommon/footer.php'); ?>

<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.js'></script>

<script>
    (function() {
  var testApp;

  testApp = angular.module('tag-input', []);

  testApp.controller('FormCtrl', function($scope) {
    $scope.listone = "";
    $scope.listtwo = "one,two,three";
    $scope.listthree = "";
    return $scope.users = ["Max", "Tim", "Bernd", "Angela"];
  });

  testApp.directive('tagInput', function() {
    return {
      restrict: 'E',
      scope: {
        inputTags: '=taglist',
        autocomplete: '=autocomplete'
      },
      link: function($scope, element, attrs) {
        $scope.defaultWidth = 200;
        $scope.tagText = '';
        $scope.placeholder = attrs.placeholder;
        if ($scope.autocomplete) {
          $scope.autocompleteFocus = function(event, ui) {
            $(element).find('input').val(ui.item.value);
            return false;
          };
          $scope.autocompleteSelect = function(event, ui) {
            $scope.$apply(`tagText='${ui.item.value}'`);
            $scope.$apply('addTag()');
            return false;
          };
          $(element).find('input').autocomplete({
            minLength: 0,
            source: function(request, response) {
              var item;
              return response((function() {
                var i, len, ref, results;
                ref = $scope.autocomplete;
                results = [];
                for (i = 0, len = ref.length; i < len; i++) {
                  item = ref[i];
                  if (item.toLowerCase().indexOf(request.term.toLowerCase()) !== -1) {
                    results.push(item);
                  }
                }
                return results;
              })());
            },
            focus: (event, ui) => {
              return $scope.autocompleteFocus(event, ui);
            },
            select: (event, ui) => {
              return $scope.autocompleteSelect(event, ui);
            }
          });
        }
        $scope.tagArray = function() {
          if ($scope.inputTags === undefined) {
            return [];
          }
          return $scope.inputTags.split(',').filter(function(tag) {
            return tag !== "";
          });
        };
        $scope.addTag = function() {
          var tagArray;
          if ($scope.tagText.length === 0) {
            return;
          }
          tagArray = $scope.tagArray();
          tagArray.push($scope.tagText);
          $scope.inputTags = tagArray.join(',');
          return $scope.tagText = "";
        };
        $scope.deleteTag = function(key) {
          var tagArray;
          tagArray = $scope.tagArray();
          if (tagArray.length > 0 && $scope.tagText.length === 0 && key === undefined) {
            tagArray.pop();
          } else {
            if (key !== undefined) {
              tagArray.splice(key, 1);
            }
          }
          return $scope.inputTags = tagArray.join(',');
        };
        
        // Watch for changes in text field
        $scope.$watch('tagText', function(newVal, oldVal) {
          var tempEl;
          if (!(newVal === oldVal && newVal === undefined)) {
            tempEl = $("<span>" + newVal + "</span>").appendTo("body");
            $scope.inputWidth = tempEl.width() + 5;
            if ($scope.inputWidth < $scope.defaultWidth) {
              $scope.inputWidth = $scope.defaultWidth;
            }
            return tempEl.remove();
          }
        });
        element.bind("keydown", function(e) {
          var key;
          key = e.which;
          if (key === 9 || key === 13) {
            e.preventDefault();
          }
          if (key === 8) {
            return $scope.$apply('deleteTag()');
          }
        });
        return element.bind("keyup", function(e) {
          var key;
          key = e.which;
          
          // Tab, Enter or , pressed 
          if (key === 9 || key === 13 || key === 188) {
            e.preventDefault();
            return $scope.$apply('addTag()');
          }
        });
      },
      template: "<div class='tag-input-ctn'><div class='input-tag' data-ng-repeat=\"tag in tagArray()\">{{tag}}<div class='delete-tag' data-ng-click='deleteTag($index)'>&times;</div></div><input type='text' data-ng-style='{width: inputWidth}' data-ng-model='tagText' placeholder='{{placeholder}}'/></div>"
    };
  });

    }).call(this);

    //# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQSxNQUFBOztFQUFBLE9BQUEsR0FBVSxPQUFPLENBQUMsTUFBUixDQUFlLFdBQWYsRUFBNEIsRUFBNUI7O0VBRVYsT0FBTyxDQUFDLFVBQVIsQ0FBbUIsVUFBbkIsRUFBK0IsUUFBQSxDQUFDLE1BQUQsQ0FBQTtJQUM3QixNQUFNLENBQUMsT0FBUCxHQUFpQjtJQUNqQixNQUFNLENBQUMsT0FBUCxHQUFpQjtJQUNqQixNQUFNLENBQUMsU0FBUCxHQUFtQjtXQUVuQixNQUFNLENBQUMsS0FBUCxHQUFlLENBQUMsS0FBRCxFQUFPLEtBQVAsRUFBYSxPQUFiLEVBQXFCLFFBQXJCO0VBTGMsQ0FBL0I7O0VBT0EsT0FBTyxDQUFDLFNBQVIsQ0FBa0IsVUFBbEIsRUFBOEIsUUFBQSxDQUFBLENBQUE7V0FDNUI7TUFBQSxRQUFBLEVBQVUsR0FBVjtNQUNBLEtBQUEsRUFDRTtRQUFBLFNBQUEsRUFBVyxVQUFYO1FBQ0EsWUFBQSxFQUFjO01BRGQsQ0FGRjtNQUtBLElBQUEsRUFBTSxRQUFBLENBQUMsTUFBRCxFQUFTLE9BQVQsRUFBa0IsS0FBbEIsQ0FBQTtRQUVKLE1BQU0sQ0FBQyxZQUFQLEdBQXNCO1FBQ3RCLE1BQU0sQ0FBQyxPQUFQLEdBQWlCO1FBQ2pCLE1BQU0sQ0FBQyxXQUFQLEdBQXFCLEtBQUssQ0FBQztRQUUzQixJQUFHLE1BQU0sQ0FBQyxZQUFWO1VBRUUsTUFBTSxDQUFDLGlCQUFQLEdBQTJCLFFBQUEsQ0FBQyxLQUFELEVBQVEsRUFBUixDQUFBO1lBQ3pCLENBQUEsQ0FBRSxPQUFGLENBQVUsQ0FBQyxJQUFYLENBQWdCLE9BQWhCLENBQXdCLENBQUMsR0FBekIsQ0FBOEIsRUFBRSxDQUFDLElBQUksQ0FBQyxLQUF0QztBQUNBLG1CQUFPO1VBRmtCO1VBSTNCLE1BQU0sQ0FBQyxrQkFBUCxHQUE0QixRQUFBLENBQUMsS0FB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QUFDLFVBQVAsR0FBb0IsTUFBTSxDQUFDLEtBQVAsQ0FBQSxDQUFBLEdBQWlCO1lBQ3JDLElBQTJDLE1BQU0sQ0FBQyxVQUFQLEdBQW9CLE1BQU0sQ0FBQyxZQUF0RTtjQUFBLE1BQU0sQ0FBQyxVQUFQLEdBQW9CLE1BQU0sQ0FBQyxhQUEzQjs7bUJBQ0EsTUFBTSxDQUFDLE1BQVAsQ0FBQSxFQUxGOztRQUR1QixDQUF6QjtRQVFBLE9BQU8sQ0FBQyxJQUFSLENBQWEsU0FBYixFQUF3QixRQUFBLENBQUMsQ0FBRCxDQUFBO0FBQ3RCLGNBQUE7VUFBQSxHQUFBLEdBQU0sQ0FBQyxDQUFDO1VBRVIsSUFBc0IsR0FBQSxLQUFPLENBQVAsSUFBWSxHQUFBLEtBQU8sRUFBekM7WUFBQSxDQUFDLENBQUMsY0FBRixDQUFBLEVBQUE7O1VBQ0EsSUFBK0IsR0FBQSxLQUFPLENBQXRDO21CQUFBLE1BQU0sQ0FBQyxNQUFQLENBQWMsYUFBZCxFQUFBOztRQUpzQixDQUF4QjtlQU1BLE9BQU8sQ0FBQyxJQUFSLENBQWEsT0FBYixFQUFzQixRQUFBLENBQUMsQ0FBRCxDQUFBO0FBQ3BCLGNBQUE7VUFBQSxHQUFBLEdBQU0sQ0FBQyxDQUFDLE1BQVI7OztVQUdBLElBQUcsR0FBQSxLQUFPLENBQVAsSUFBWSxHQUFBLEtBQU8sRUFBbkIsSUFBeUIsR0FBQSxLQUFPLEdBQW5DO1lBQ0UsQ0FBQyxDQUFDLGNBQUYsQ0FBQTttQkFDQSxNQUFNLENBQUMsTUFBUCxDQUFjLFVBQWQsRUFGRjs7UUFKb0IsQ0FBdEI7TUExREksQ0FMTjtNQXVFQSxRQUFBLEVBQVU7SUF2RVY7RUFENEIsQ0FBOUI7QUFUQSIsInNvdXJjZXNDb250ZW50IjpbInRlc3RBcHAgPSBhbmd1bGFyLm1vZHVsZSgndGFnLWlucHV0JywgW10pXG5cbnRlc3RBcHAuY29udHJvbGxlciAnRm9ybUN0cmwnLCAoJHNjb3BlKSAtPlxuICAkc2NvcGUubGlzdG9uZSA9IFwiXCJcbiAgJHNjb3BlLmxpc3R0d28gPSBcIm9uZSx0d28sdGhyZWVcIlxuICAkc2NvcGUubGlzdHRocmVlID0gXCJcIlxuICBcbiAgJHNjb3BlLnVzZXJzID0gW1wiTWF4XCIsXCJUaW1cIixcIkJlcm5kXCIsXCJBbmdlbGFcIl1cbiAgXG50ZXN0QXBwLmRpcmVjdGl2ZSAndGFnSW5wdXQnLCAtPlxuICByZXN0cmljdDogJ0UnXG4gIHNjb3BlOiBcbiAgICBpbnB1dFRhZ3M6ICc9dGFnbGlzdCdcbiAgICBhdXRvY29tcGxldGU6ICc9YXV0b2NvbXBsZXRlJ1xuICAgIFxuICBsaW5rOiAoJHNjb3BlLCBlbGVtZW50LCBhdHRycykgLT5cblxuICAgICRzY29wZS5kZWZhdWx0V2lkdGggPSAyMDBcbiAgICAkc2NvcGUudGFnVGV4dCA9ICcnXG4gICAgJHNjb3BlLnBsYWNlaG9sZGVyID0gYXR0cnMucGxhY2Vob2xkZXJcbiAgICBcbiAgICBpZiAkc2NvcGUuYXV0b2NvbXBsZXRlXG4gICAgICBcbiAgICAgICRzY29wZS5hdXRvY29tcGxldGVGb2N1cyA9IChldmVudCwgdWkpIC0+XG4gICAgICAgICQoZWxlbWVudCkuZmluZCgnaW5wdXQnKS52YWwoIHVpLml0ZW0udmFsdWUgKVxuICAgICAgICByZXR1cm4gZmFsc2VcblxuICAgICAgJHNjb3BlLmF1dG9jb21wbGV0ZVNlbGVjdCA9IChldmVudCwgdWkpIC0+XG4gICAgICAgICRzY29wZS4kYXBwbHkgXCJ0YWdUZXh0PScje3VpLml0ZW0udmFsdWV9J1wiXG4gICAgICAgICRzY29wZS4kYXBwbHkgJ2FkZFRhZygpJ1xuICAgICAgICByZXR1cm4gZmFsc2VcbiAgICAgIFxuICAgICAgJChlbGVtZW50KS5maW5kKCdpbnB1dCcpLmF1dG9jb21wbGV0ZVxuICAgICAgICBtaW5MZW5ndGg6IDBcbiAgICAgICAgc291cmNlOiAocmVxdWVzdCwgcmVzcG9uc2UpIC0+XG4gICAgICAgICAgcmVzcG9uc2UgKGl0ZW0gZm9yIGl0ZW0gaW4gJHNjb3BlLmF1dG9jb21wbGV0ZSB3aGVuIGl0ZW0udG9Mb3dlckNhc2UoKS5pbmRleE9mKHJlcXVlc3QudGVybS50b0xvd2VyQ2FzZSgpKSAhPSAtMSlcbiAgICAgICAgZm9jdXM6IChldmVudCwgdWkpID0+ICRzY29wZS5hdXRvY29tcGxldGVGb2N1cyhldmVudCwgdWkpXG4gICAgICAgIHNlbGVjdDogKGV2ZW50LCB1aSkgPT4gJHNjb3BlLmF1dG9jb21wbGV0ZVNlbGVjdChldmVudCwgdWkpXG4gICAgXG4gICAgJHNjb3BlLnRhZ0FycmF5ID0gLT5cbiAgICAgIHJldHVybiBbXSBpZiAkc2NvcGUuaW5wdXRUYWdzIGlzIGB1bmRlZmluZWRgXG4gICAgICAkc2NvcGUuaW5wdXRUYWdzLnNwbGl0KCcsJykuZmlsdGVyICh0YWcpIC0+XG4gICAgICAgIHJldHVybiB0YWcgIT0gXCJcIlxuICAgIFxuICAgICRzY29wZS5hZGRUYWcgPSAtPlxuICAgICAgcmV0dXJuIGlmICRzY29wZS50YWdUZXh0Lmxlbmd0aCBpcyAwXG4gICAgICB0YWdBcnJheSA9ICRzY29wZS50YWdBcnJheSgpXG4gICAgICB0YWdBcnJheS5wdXNoICRzY29wZS50YWdUZXh0XG4gICAgICAkc2NvcGUuaW5wdXRUYWdzID0gdGFnQXJyYXkuam9pbignLCcpXG4gICAgICAkc2NvcGUudGFnVGV4dCA9IFwiXCJcbiAgICAgIFxuICAgICRzY29wZS5kZWxldGVUYWcgPSAoa2V5KSAtPlxuICAgICAgdGFnQXJyYXkgPSAkc2NvcGUudGFnQXJyYXkoKVxuICAgICAgaWYgdGFnQXJyYXkubGVuZ3RoID4gMCBhbmQgJHNjb3BlLnRhZ1RleHQubGVuZ3RoIGlzIDAgYW5kIGtleSBpcyBgdW5kZWZpbmVkYFxuICAgICAgICB0YWdBcnJheS5wb3AoKVxuICAgICAgZWxzZSB0YWdBcnJheS5zcGxpY2Uga2V5LCAxICB1bmxlc3Mga2V5IGlzIGB1bmRlZmluZWRgXG4gICAgICAkc2NvcGUuaW5wdXRUYWdzID0gdGFnQXJyYXkuam9pbignLCcpXG4gICAgICAgXG4gICAgIyBXYXRjaCBmb3IgY2hhbmdlcyBpbiB0ZXh0IGZpZWxkXG4gICAgJHNjb3BlLiR3YXRjaCAndGFnVGV4dCcsIChuZXdWYWwsIG9sZFZhbCkgLT5cbiAgICAgIHVubGVzcyBuZXdWYWwgaXMgb2xkVmFsIGFuZCBuZXdWYWwgaXMgYHVuZGVmaW5lZGBcbiAgICAgICAgXG4gICAgICAgIHRlbXBFbCA9ICQoXCI8c3Bhbj5cIiArIG5ld1ZhbCArIFwiPC9zcGFuPlwiKS5hcHBlbmRUbyhcImJvZHlcIilcbiAgICAgICAgJHNjb3BlLmlucHV0V2lkdGggPSB0ZW1wRWwud2lkdGgoKSArIDVcbiAgICAgICAgJHNjb3BlLmlucHV0V2lkdGggPSAkc2NvcGUuZGVmYXVsdFdpZHRoIGlmICRzY29wZS5pbnB1dFdpZHRoIDwgJHNjb3BlLmRlZmF1bHRXaWR0aFxuICAgICAgICB0ZW1wRWwucmVtb3ZlKClcblxuICAgIGVsZW1lbnQuYmluZCBcImtleWRvd25cIiwgKGUpIC0+XG4gICAgICBrZXkgPSBlLndoaWNoXG4gICAgICBcbiAgICAgIGUucHJldmVudERlZmF1bHQoKSBpZiBrZXkgaXMgOSBvciBrZXkgaXMgMTNcbiAgICAgICRzY29wZS4kYXBwbHkgJ2RlbGV0ZVRhZygpJyBpZiBrZXkgaXMgOFxuXG4gICAgZWxlbWVudC5iaW5kIFwia2V5dXBcIiwgKGUpIC0+XG4gICAgICBrZXkgPSBlLndoaWNoXG4gIFxuICAgICAgIyBUYWIsIEVudGVyIG9yICwgcHJlc3NlZCBcbiAgICAgIGlmIGtleSBpcyA5IG9yIGtleSBpcyAxMyBvciBrZXkgaXMgMTg4XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKVxuICAgICAgICAkc2NvcGUuJGFwcGx5ICdhZGRUYWcoKSdcblxuICB0ZW1wbGF0ZTogXCI8ZGl2IGNsYXNzPSd0YWctaW5wdXQtY3RuJz48ZGl2IGNsYXNzPSdpbnB1dC10YWcnIGRhdGEtbmctcmVwZWF0PVxcXCJ0YWcgaW4gdGFnQXJyYXkoKVxcXCI+e3t0YWd9fTxkaXYgY2xhc3M9J2RlbGV0ZS10YWcnIGRhdGEtbmctY2xpY2s9J2RlbGV0ZVRhZygkaW5kZXgpJz4mdGltZXM7PC9kaXY+PC9kaXY+PGlucHV0IHR5cGU9J3RleHQnIGRhdGEtbmctc3R5bGU9J3t3aWR0aDogaW5wdXRXaWR0aH0nIGRhdGEtbmctbW9kZWw9J3RhZ1RleHQnIHBsYWNlaG9sZGVyPSd7e3BsYWNlaG9sZGVyfX0nLz48L2Rpdj5cIiJdfQ==
    //# sourceURL=coffeescript
</script>