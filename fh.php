btn.innerHTML = '<i class="fa fa-magic mr-2"></i> 生成防红链接';
        showToast('获取主域名失败！', 'error');
      }
    }

    // 复制结果到剪贴板
    function copyResult() {
      var text = document.getElementById('output').textContent;
      if (!text) {
        showToast('没有可复制的链接！', 'error');
        return;
      }
      if (navigator.clipboard) {
        navigator.clipboard.writeText(text).then(() => {
          showToast('链接已复制！', 'success');
        }).catch(err => {
          showToast('复制失败：' + err, 'error');
        });
      } else {
        var textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        try {
          document.execCommand('copy');
          showToast('链接已复制！', 'success');
        } catch (err) {
          showToast('复制失败，请手动复制', 'error');
        }
        document.body.removeChild(textarea);
      }
    }

    // Toast 提示
    function showToast(message, type = 'info') {
      var toast = document.getElementById('toast');
      toast.textContent = message;
      toast.className = 'fixed bottom-8 left-1/2 transform -translate-x-1/2 px-4 py-2 rounded-lg shadow-lg z-50 text-white font-medium text-sm animate-fadeIn';
      toast.style.background = type === 'success' ? '#10b981' : (type==='error' ? '#ef4444' : '#2563eb');
      toast.style.display = 'block';
      setTimeout(() => {
        toast.style.display = 'none';
      }, 2200);
    }

    // 微信弹窗
    function showWechat() {
      document.getElementById('wechatModal').classList.remove('hidden');
    }
    function closeWechat() {
      document.getElementById('wechatModal').classList.add('hidden');
    }
    // 顶部扫码弹窗
    function showTopWechat() {
      document.getElementById('topWechatModal').classList.remove('hidden');
    }
    function closeTopWechat() {
      document.getElementById('topWechatModal').classList.add('hidden');
    }
  </script>

  <!-- 网站访问统计代码 -->
  <script type="text/javascript" src="https://js.users.51.la/21969247.js"></script>
</body>
</html>
